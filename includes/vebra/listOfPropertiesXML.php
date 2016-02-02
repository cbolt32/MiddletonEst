<?php
session_start();

ini_set( 'max_execution_time', 300 ); //300 seconds = 5 minutes, in reality this code doesn't take this long.  However using phpmyadmin can be slow so I pushed the time up just to be safe.

// As you can see, I have left a lot of commented test code, this is to test parts of the code to see it's progress should you get issues.

//This code will set up the Token

$canCloseDatabase = false;
$tickUp           = 0;

include( 'apiLogin.php' );

$propertiesInArray    = array();
$propURLArray         = array();
$propertyLoopComplete = false;
$propertiesRequest    = "http://webservices.vebra.com/export/$datafeedID/v$version/branch/$clientID/property";
$_SESSION['token']    = 'VEdHRlRWV0REQ0xCT0dJWFdKUk1BUU9PRE1WQlROVVdTSU1MT1ZIVVJNT0xIQUtLT08=';
//echo $_SESSION['token'] . '*******SESSION Token*********';

//Function to authenticate self to API and return/store the Token
function getToken( $url ) {

	//Re-define username and password variable scope so they can be used within the function
	global $username, $password;

	//Overwiting the response headers from each attempt in this file (for information only)
	$file = "h.txt";
	$fh   = fopen( $file, "w" );

	//Start curl session
	$ch = curl_init( $url );
	//Define Basic HTTP Authentication method
	curl_setopt( $ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC );
	//Provide Username and Password Details
	curl_setopt( $ch, CURLOPT_USERPWD, "$username:$password" );
	//Show headers in returned data but not body as we are only using this curl session to aquire and store the token
	curl_setopt( $ch, CURLOPT_HEADER, 1 );
	curl_setopt( $ch, CURLOPT_NOBODY, 1 );
	//write the output (returned headers) to file
	curl_setopt( $ch, CURLOPT_FILE, $fh );
	//execute curl session
	curl_exec( $ch );
	// close curl session
	curl_close( $ch );
	//close headers.txt file
	fclose( $fh );

	//read each line of the returned headers back into an array
	$headers = file( 'h.txt', FILE_SKIP_EMPTY_LINES );

	//for each line of the array explode the line by ':' (Seperating the header name from its value)
	foreach ( $headers as $headerLine ) {

		$line   = explode( ':', $headerLine );
		$header = $line[0];
		$value  = trim( $line[1] );

		//If the request is successful and we are returned a token
		if ( $header == "Token" ) {
			//save token start and expire time (roughly)
			$tokenStart  = time();
			$tokenExpire = $tokenStart + 60 * 10;
			//save the token in a session variable (base 64 encoded)
			$_SESSION['token'] = base64_encode( $value );

			//For now write this new token, its start and expiry datetime into a .txt (appending not overwriting - this is for reference in case you loose your session data)
			$file = "t.txt";
			$fh   = fopen( $file, "a+" );
			//write the line in
			$newLine = "'" . $_SESSION['token'] . "','" . date( 'd/m/Y H:i:s', $tokenStart ) . "','" . date( 'd/m/Y H:i:s', $tokenExpire ) . "'" . "\n";
			fwrite( $fh, $newLine );
			//Close file
			fclose( $fh );
		}

	}
//	echo $_SESSION['token'] . '*******SESSION Token*********';
	//If we have been given a token request XML from the API authenticating using the token
	if ( ! empty( $_SESSION['token'] ) ) {
		echo 'Token Authenticated<br/>';
		createPropertylistWithoutAuthentication( $propertiesRequest );
//		connectGetPropertyList($url);
	} else {
		//If we have not been given a new token its because we already have a live token which has not expired yet (check the tokens.txt file)
		echo '<br />There is still an active Token, you must wait for this token to expire before a new one can be requested!<br />';
//		connectGetPropertyList($url);
		connectGetPropertyList( $propertiesRequest );
	}
//	echo $_SESSION['token'] . '*******SESSION Token*********';
}  // END FUNCTION
//echo $_SESSION['token'] . '*******SESSION Token*********';
connectGetPropertyList( $propertiesRequest );


function checkForPropertyList() {
//Check to see if the XML file exists before it imports it
	if ( file_exists( 'propertylist.xml' ) ) {
		//echo 'Running checkForPropertyList function';
		$xmlPropertyList = simplexml_load_file( 'propertylist.xml' );
		dealWithDatabaseAfterAuthentication( $xmlPropertyList );

		//echo "Successfully loaded your file" . '<br>';

	} else {


		//Connect to the API using connect() function above


//connectGetPropertyList($propertiesRequest);
//
//	if (file_exists('propertylist.xml'))
//	{
//		$xmlPropertyList = simplexml_load_file('propertylist.xml');
//		dealWithDatabaseAfterAuthentication();
//	}
//	else
//	{
//		exit('failed to open propertylist.xml.');
//	}
//
//	This code was experimental, I haven't needed it, but I have left it in anyway,


		//exit('failed to open propertylist.xml.');
	}
} //Close function

function dealWithDatabaseAfterAuthentication( $xmlPropertyList ) {

	//echo 'running dealWithDatabaseAfterAuthentication function<br />';
	$propertyLoopComplete = false;
	$canCloseDatabase     = true;
	//Link to the mySQL database

	include( 'login.php' );


	// Check connection

	if ( mysqli_connect_errno( $con ) ) {
//		echo "CHRIS*** Failed to connect to MySQL: " . mysqli_connect_error();
	} else {

		//echo 'You have successfully connected to the database.';

		//Delete previous propertylist table
		$deletePreviousTables = 'DELETE FROM `propertylist` WHERE 1';
		$deletePropertyTable  = 'DROP TABLE property, propertypara';


		mysqli_query( $con, $deletePreviousTables );

		if ( mysqli_query( $con, $deletePropertyTable ) ) {
//			echo 'You have successfully deleted your table';
		} else {
//			echo 'Failed to delete your table';
		}


		//Pull out the data from the XML file and place them in variables

		$xmlCount = count( $xmlPropertyList );
		for ( $i = 0; $i < $xmlCount; $i ++ ) {
			$prop_id[ $i ]  = $xmlPropertyList->property[ $i ]->prop_id;
			$prop_url[ $i ] = $xmlPropertyList->property[ $i ]->url;


			global $propertiesInArray;
			$propertiesInArray[ $i ] = $prop_id[ $i ];


			$dataSend = "INSERT INTO `propertylist` (`ID`, `prop_id`, `url`) VALUES ($i, '$prop_id[$i]', '$prop_url[$i]')";

			//echo ($dataSend);//todo comment out

			mysqli_query( $con, $dataSend );

			//Push the property ID into the propID array
			global $propURLArray;
			$propURLArray[ $i ] = $prop_url[ $i ];


			//If Authorised will create an XML file based on the original propertylist XML

			//Function to connect to the API authenticating ourself with the token we have been given

		}  //End for loop

		$propertyLoopComplete = true;

		createEachPropertyXML( $propertyLoopComplete, $con );

	}  //END ELSE Statement

}  // Close function


function createEachPropertyXML( $propertyLoopComplete, $con ) {

	//echo '<br />Running createEachPropertyXML function<br />';
	global $propURLArray;
	//print_r($propURLArray);
	global $propertiesInArray;
	//print_r($propertiesInArray);
	if ( $propertyLoopComplete == true ) {


		$xmlCount = count( $propURLArray );
		for ( $i = 0; $i < $xmlCount; $i ++ ) {
			//echo 'Running createEachPropertyXML function' . $i;
			//echo 'inside for loop<br />';

			//echo 'The code before the request variable is RUNNING '

			//function call to send current property ID and request to API call.
			connectProperties( $propURLArray[ $i ], $propertiesInArray[ $i ] );
//			echo 'Exporting property number ' . $propertiesInArray[ $i ] . '<br />';

			//Check to see if the XML Properties files exist before it imports them
			if ( file_exists( $propertiesInArray[ $i ] . '.xml' ) ) {

				//echo "Successfully loaded your single property file" . '<br>';

				if ( file_exists( $propertiesInArray[ $i ] . '.xml' ) ) {
					$xmlPropertyID[ $i ] = simplexml_load_file( $propertiesInArray[ $i ] . '.xml' );
					//array_push($propertiesInArray, $prop_id[$i]);
				} else {
					exit( "failed to open $prop_id[$i].xml." );
				}


				//print_r ($xmlPropertyID[$i]);

				//function call to parse in data from XML for all the properties found during these loops
				exportIntoDatabase( $xmlPropertyID[ $i ], $propertiesInArray[ $i ], $con );

				//Delete files after importing into the database
				//unlink ($prop_id[$i] . '.xml');

			} else {
				exit( 'Sorry couldnt find ' . $propertiesInArray[ $i ] );
			}

		}  //END for loop

	} // End if condition
} // END Function


//This is the code that is run every loop.
function exportIntoDatabase( $xml, $IDofProperty, $con ) {
	$tickUp = 0;

	//This is the SQL statement to add a column


	$addressName     = $xml->address->name;
	$addressName     = str_replace( "'", "''", $addressName );
	$addressStreet   = $xml->address->street;
	$addressStreet   = str_replace( "'", "''", $addressStreet );
	$locality        = $xml->address->locality;
	$locality        = str_replace( "'", "''", $locality );
	$town            = $xml->address->town;
	$town            = str_replace( "'", "''", $town );
	$county          = $xml->address->county;
	$county          = str_replace( "'", "''", $county );
	$postCode        = $xml->address->postcode;
	$postCode        = str_replace( "'", "''", $postCode );
	$completeAddress = $addressName . ', ';
	$completeAddress .= $addressStreet . ', ';
	$completeAddress .= $locality . ', ';
	$completeAddress .= $town . ', ';
	$completeAddress .= $county . ', ';
	$completeAddress .= $postCode;
	$custom_location = $xml->address->custom_location;
	$custom_location = str_replace( "'", "''", $custom_location );
	$display         = $xml->address->display;
	$display         = str_replace( "'", "''", $display );
	$price           = $xml->price;
	$price           = str_replace( "'", "''", $price );
	$rm_qualifier    = $xml->rm_qualifier;
	$rm_qualifier    = str_replace( "'", "''", $rm_qualifier );
	$available       = $xml->available;
	$available       = str_replace( "'", "''", $available );
	$agents          = $xml->reference->agents;
	$agents          = str_replace( "'", "''", $agents );
	$uploaded        = $xml->uploaded;
	$longitude       = $xml->longitude;
	$latitude        = $xml->latitude;
	$easting         = $xml->easting;
	$northing        = $xml->northing;
	$web_status      = $xml->web_status;
	$custom_status   = $xml->custom_status;
	$comm_rent       = $xml->comm_rent;
	$premium         = $xml->premium;
	$service_charge  = $xml->service_charge;
	$rateable_value  = $xml->rateable_value;
	$type            = $xml->type;
	$type            = str_replace( "'", "''", $type );
	$convertToLower  = strtolower( $type );
	if ( $convertToLower == 'flat - penthouse' ) {
		$type = 'flat';
	}
	$furnished      = $xml->furnished;
	$rm_type        = $xml->rm_type;
	$let_bond       = $xml->let_bond;
	$rm_let_type_id = $xml->rm_let_type_id;
	$bedrooms       = $xml->bedrooms;
	$receptions     = $xml->receptions;
	$bathrooms      = $xml->bathrooms;
	$fileType       = $xml->file->type;
	echo $fileType;
	$userfield1                       = $xml->userfield1;
	$userfield1                       = str_replace( "'", "''", $userfield1 );
	$userfield2                       = $xml->userfield2;
	$userfield2                       = str_replace( "'", "''", $userfield2 );
	$solddate                         = $xml->solddate;
	$leaseend                         = $xml->leaseend;
	$instructed                       = $xml->instructed;
	$soldprice                        = $xml->soldprice;
	$garden                           = $xml->garden;
	$parking                          = $xml->parking;
	$groundrent                       = $xml->groundrent;
	$commission                       = $xml->commission;
	$areaMeasureMetricMin             = $xml->area[0]->min;
	$areaMeasureMetricMax             = $xml->area[0]->max;
	$areaMeasureImperialMin           = $xml->area[1]->min;
	$areaMeasureImperialMax           = $xml->area[1]->max;
	$description                      = $xml->description;
	$description                      = str_replace( "'", "''", $description );
	$HIPenergy_efficiencyCurrent      = $xml->hip->energy_performance->energy_efficiency->current;
	$HIPenergy_efficiencyPotential    = $xml->hip->energy_performance->energy_efficiency->potential;
	$HIPenvironmental_impactCurrent   = $xml->hip->energy_performance->environmental_impact->current;
	$HIPenvironmental_impactPotential = $xml->hip->energy_performance->environmental_impact->potential;
	$tablepropertyID                  = "CREATE TABLE property(propertyID TEXT ";
	$tablepropertyID .= ", address VARCHAR(255)";
	$tablepropertyID .= ", agents VARCHAR (255)";
	$tablepropertyID .= ", rent VARCHAR (50)";
	$tablepropertyID .= ", custom_location VARCHAR (455)";
	$tablepropertyID .= ", displayProperty VARCHAR (255)";
	$tablepropertyID .= ", available VARCHAR (100)";
	$tablepropertyID .= ", longitude VARCHAR (200)";
	$tablepropertyID .= ", latitude VARCHAR (200)";
	$tablepropertyID .= ", easting VARCHAR (455)";
	$tablepropertyID .= ", northing VARCHAR (455)";
	$tablepropertyID .= ", web_status INT (10)";
	$tablepropertyID .= ", custom_status VARCHAR (200)";
	$tablepropertyID .= ", comm_rent VARCHAR (455)";
	$tablepropertyID .= ", premium VARCHAR (455)";
	$tablepropertyID .= ", service_charge VARCHAR (200)";
	$tablepropertyID .= ", rateable_value VARCHAR (455)";
	$tablepropertyID .= ", type VARCHAR (200)";
	$tablepropertyID .= ", furnished VARCHAR (200)";
	$tablepropertyID .= ", let_bond VARCHAR (200)";
	$tablepropertyID .= ", bedrooms INT (50)";
	$tablepropertyID .= ", receptions VARCHAR (50)";
	$tablepropertyID .= ", bathrooms VARCHAR (50)";
	$tablepropertyID .= ", userfield1 VARCHAR (455)";
	$tablepropertyID .= ", qualifier VARCHAR (200)";
	$tablepropertyID .= ", currency VARCHAR (50)";
	$tablepropertyID .= ", price INT (100)";
	$tablepropertyID .= ", uploaded VARCHAR (200)";
	$tablepropertyID .= ", userfield2 VARCHAR (455)";
	$tablepropertyID .= ", solddate VARCHAR (50)";
	$tablepropertyID .= ", leaseend VARCHAR (50)";
	$tablepropertyID .= ", instructed VARCHAR (455)";
	$tablepropertyID .= ", areaMeasureMetricMin VARCHAR (300)";
	$tablepropertyID .= ", areaMeasureMetricMax VARCHAR (300)";
	$tablepropertyID .= ", areaMeasureImperialMin VARCHAR (300)";
	$tablepropertyID .= ", areaMeasureImperialMax VARCHAR (300)";
	$tablepropertyID .= ", description TEXT (800)";
	$tablepropertyID .= ", HIPenergy_efficiencyCurrent VARCHAR (455)";//was455
	$tablepropertyID .= ", HIPenergy_efficiencyPotential VARCHAR (455)";//was455
	$tablepropertyID .= ", HIPenvironmental_impactCurrent VARCHAR (455)";//was455
	$tablepropertyID .= ", HIPenvironmental_impactPotential VARCHAR (455)";//was455


	for ( $j = 0; $j <= 10; $j ++ ) {

		$tablepropertyID .= ", bullets$j VARCHAR(455)";
	}

	for ( $j = 0; $j <= 39; $j ++ ) {

		$tablepropertyID .= ", filesurlName$j TEXT(655)";
	}
	for ( $j = 0; $j <= 39; $j ++ ) {

		$tablepropertyID .= ", filesurl$j TEXT(655)";
	}
	for ( $j = 0; $j <= 1; $j ++ ) {
		$tablepropertyID .= ", floorplan$j VARCHAR(455)";
	}

	for ( $j = 0; $j <= 1; $j ++ ) {
		$tablepropertyID .= ", EErating$j VARCHAR(455)";
	}

	$tablepropertyID .= ")";

	//echo ($tablepropertyID);

	$exportPropertyDetails  = "INSERT INTO `property` (propertyID) VALUES ($IDofProperty)";
	$exportPropertyDetails2 = "UPDATE property SET address='$completeAddress', custom_location='$custom_location', displayProperty='$display', agents='$agents', available='$available', uploaded='$uploaded',longitude='$longitude', latitude='$latitude', web_status='$web_status', easting='$easting', northing='$northing', custom_status='$custom_status', comm_rent='$comm_rent', premium='$premium', service_charge='$service_charge', rateable_value='$rateable_value', type='$type', furnished='$furnished', let_bond='$let_bond', bedrooms='$bedrooms', receptions='$receptions', bathrooms='$bathrooms', userfield1='$userfield1', userfield2='$userfield2', solddate='$solddate', leaseend='$leaseend', instructed='$instructed', price='$price', areaMeasureMetricMin='$areaMeasureMetricMin', areaMeasureMetricMax='$areaMeasureMetricMax', areaMeasureImperialMin='$areaMeasureImperialMin', areaMeasureImperialMax='$areaMeasureImperialMax', description='$description', HIPenergy_efficiencyCurrent='$HIPenergy_efficiencyCurrent', HIPenergy_efficiencyPotential='$HIPenergy_efficiencyPotential', HIPenvironmental_impactCurrent='$HIPenvironmental_impactCurrent', HIPenvironmental_impactPotential='$HIPenvironmental_impactPotential' WHERE propertyID=$IDofProperty";


//	echo ($exportPropertyDetails);


	if ( mysqli_query( $con, $tablepropertyID ) ) {
//		echo 'You have successfully created the table - YAY!' . '<br>';
	} else {
//		echo '***CHRIS*** Sorry couldnt connect to your database to create the table' . '<br>';
	}

	if ( mysqli_query( $con, $exportPropertyDetails ) ) {
//		echo 'You have successfully export your data into the table' . '<br>';
	} else {
//		echo 'Sorry couldnt connect to your database to export the data' . '<br>';
	}

	if ( mysqli_query( $con, $exportPropertyDetails2 ) ) {
//		echo 'You have successfully export2 your data into the table' . '<br>';
	} else {
//		echo 'Sorry couldnt connect to your database to export2 the data' . '<br>';
	}







	$tablepropertyparaID = "CREATE TABLE propertypara(propertyID TEXT ";
	$loopSending = "INSERT INTO `propertypara` (propertyID) VALUES ($IDofProperty)";

	for ( $k = 0; $k <= 30; $k ++ ) {
//todo This should be 20 iterations, but connection fails with sql error 1118 as rows too big??
		$tablepropertyparaID .= ", paragraphname$k VARCHAR(155)"; //was455
		$tablepropertyparaID .= ", paragraph$k TEXT(455)";//was655
		$tablepropertyparaID .= ", measurementMetric$k VARCHAR (100)";//was200
		$tablepropertyparaID .= ", measurementImperial$k VARCHAR (100)";//was200
		$tablepropertyparaID .= ", measurementMixed$k VARCHAR (100)";//was200

	}
	$tablepropertyparaID .= ")";
	if ( mysqli_query( $con, $tablepropertyparaID ) ) {
//			echo 'You have successfully created the table - YAY!' . '<br>';
	} else {
//			echo '***CHRIS*** Sorry couldnt connect to your database to create the table' . '<br>';
	}
	if ( mysqli_query( $con, $loopSending ) ) {
//		echo 'You connected to the database with the for loopsending';
	} else {
//		echo 'You were unable to connect loosending';
	}
// XML Paragraphs tag LOOP
	$paragraphsCount = count( $xml->paragraphs->paragraph );
	//echo ('THE AMOUNT OF PARAGRAPHS IN YOUR XML IS The amount of paragraphs in your XML is ' . $paragraphsCount);

	//This for loop will loop every paragraph inside the paragraphs tag and populate it into the database.
	for ( $i = 0; $i < $paragraphsCount; $i ++ ) {
		$paragraphs[ $i ] = $xml->paragraphs->paragraph[ $i ];
		//echo ('This is the paragraph number '
		$nameOfRoom = $paragraphs[ $i ]->name;
		//echo ('This is the file ' . $i . '=' . $paragraphs[$i]->file . '<br>');
		$measurementInMetric      = $paragraphs[ $i ]->dimensions->metric;
		$measurementInImperial    = $paragraphs[ $i ]->dimensions->imperial;
		$measurementMixed         = $paragraphs[ $i ]->dimensions->mixed;
		$textExport               = $paragraphs[ $i ]->text;
		$removeQuotesFromText     = str_replace( "'", "''", $textExport );
		$removeQuotesFromMetric   = str_replace( "'", "''", $measurementInMetric );
		$removeQuotesFromImperial = str_replace( "'", "''", $measurementInImperial );
		$removeQuotesFromMixed    = str_replace( "'", "''", $measurementMixed );

		//$tablepropertyID .= ", paragraph$i VARCHAR(455)";


		$loopSending2 = "UPDATE `propertypara` SET `paragraph$i`='$removeQuotesFromText', `paragraphname$i`='$nameOfRoom',
`measurementMetric$i`='$removeQuotesFromMetric', `measurementImperial$i`='$removeQuotesFromImperial', `measurementMixed$i`='$removeQuotesFromMixed$i' WHERE `propertyID`=$IDofProperty";
//		echo ($loopSending2);


		if ( mysqli_query( $con, $loopSending2 ) ) {
//			echo 'You connected to the database with the for loop';
		} else {
//			echo 'You were unable to connect';
		}
	} //END LOOP

	// Code to check for a floor plan and add to database.

	$floorStartCount = 0;
	$maxFloorCount   = 0;
	$maxEERating     = 0;
	$floorPlanCount  = count( $xml->files->file );
	//echo $xmlCount . '<br />';

	for ( $i = 0; $i < $floorPlanCount; $i ++ ) {
		//echo 'This is the tickup number ' .$tickUp . '<br />';
		foreach ( $xml->files->file[ $i ]->attributes() as $nameOfAttribute => $resultOfAttibute ) {

			if ( $nameOfAttribute === 'type' && $resultOfAttibute == '2' && $maxFloorCount <= 1 ) {

				$floorPlanArray = $xml->files->file[ $i ]->url;

				$planSend = "UPDATE `property` SET `floorplan$maxFloorCount`='$floorPlanArray' WHERE `propertyID`=$IDofProperty";

				if ( mysqli_query( $con, $planSend ) ) {
					//echo 'You connected to the database with the for loop';

				} else {
					//echo 'You were unable to connect';
				}

				$maxFloorCount ++;
			} //END IF

			if ( $nameOfAttribute === 'type' && $resultOfAttibute == '9' && $maxFloorCount <= 1 ) {
				$EERating = $xml->files->file[ $i ]->url;
				$EERating = "UPDATE `property` SET `EERating$maxEERating`='$EERating' WHERE `propertyID`=$IDofProperty";

				if ( mysqli_query( $con, $EERating ) ) {
					//echo 'You connected to the database with the for loop';

				} else {
					//echo 'You were unable to connect';
				}

				$maxEERating ++;

			} //END IF

		}  // end foreach loop

	} // end for loop

	//Bullets tags

	$bulletCount = count( $xml->bullets->bullet );

	for ( $i = 0; $i < $bulletCount; $i ++ ) {
		$bullets[ $i ] = $xml->bullets->bullet[ $i ];

		//echo ($bullets[$i]);

		$bulletssend = "UPDATE `property` SET `bullets$i`='$bullets[$i]' WHERE `propertyID`=$IDofProperty";

		if ( mysqli_query( $con, $bulletssend ) ) {
			//echo 'You connected to the database with the for loop';
		} else {
			//echo 'You were unable to connect';
		}

	} //END LOOP

	//FILES tags

	$urlsCount = count( $xml->files->file );

	for ( $i = 0; $i < $urlsCount; $i ++ ) {

		foreach ( $xml->files->file[ $i ]->attributes() as $nameOfAttribute => $resultOfAttibute ) {


			if ( $nameOfAttribute === 'type' && $resultOfAttibute == '0' ) //Type 0 is normal photos
			{
				$url[ $i ] = $xml->files->file[ $i ]->url;

				$urlName[ $i ] = $xml->files->file[ $i ]->name;


				$filessend = "UPDATE `property` SET `filesurl$i`='$url[$i]', `filesurlName$i`='$urlName[$i]' WHERE `propertyID`=$IDofProperty";

				//echo $filessend;

				if ( mysqli_query( $con, $filessend ) ) {
					//echo 'You connected to the database with the for loop';
				} else {
					//echo 'You were unable to connect';
				}

			} //END IF

		} // End foreach Loop

	} // End for Loop

	//This will test and show every attribute found in the price tag
	foreach ( $xml->price[0]->attributes() as $nameOfAttribute => $resultOfAttibute ) {
		$exportQualifiers = "UPDATE property SET $nameOfAttribute='$resultOfAttibute' WHERE propertyID=$IDofProperty";

		//echo ($exportQualifiers . '<br><br>');

		if ( mysqli_query( $con, $exportQualifiers ) ) {
//			echo 'You have successfully created the table - YAY!' . '<br>';
		} else {
//			echo 'Sorry couldnt connect to your database to create the table' . '<br>';
		}


		if ( $nameOfAttribute == 'rent' && $resultOfAttibute == 'pcm' ) {
			$exportRentQualifiers = "UPDATE property SET qualifier='$resultOfAttibute' WHERE propertyID=$IDofProperty";
			//Testing Code for RENT Attribute
			if ( mysqli_query( $con, $exportRentQualifiers ) ) {
				//echo 'You have successfully created the table - YAY!' . '<br>';
			} else {
				//echo 'Sorry couldnt connect to your database to create the table' . '<br>';
			}

			//Delete the above code if it doesn't work.

		} //END IF

		//This will set up the rent status

		if ( $nameOfAttribute == 'rent' ) {
			$exportRentToDatabaseYES = "UPDATE property SET rent='yes' WHERE propertyID=$IDofProperty";


			//echo ($exportQualifiers . '<br><br>');


			if ( mysqli_query( $con, $exportRentToDatabaseYES ) ) {
				//echo 'You have successfully created the table - YAY!' . '<br>';
			} else {
				//echo 'Sorry couldnt connect to your database to create the table' . '<br>';
			}

		} //END IF
		else {
			$exportRentToDatabaseNO = "UPDATE property SET rent='no' WHERE propertyID=$IDofProperty";


			//echo ($exportQualifiers . '<br><br>');


			if ( mysqli_query( $con, $exportRentToDatabaseNO ) ) {
//				echo 'You have successfully created the table - YAY!' . '<br>';
			} else {
//				echo 'Sorry couldnt connect to your database to create the table' . '<br>';
			}
		} //END ELSE


	} //END LOOP

}   //Closes the function ExportIntoDatabase

function connectProperties( $url, $propertyID ) {

//echo 'The connectProperties function is running<br />';

	//If token is not set skip to else condition to request a new token
	if ( ! empty( $_SESSION['token'] ) ) {

		//echo ($propertyID);
		//Set a new file name and create a new file handle for our returned XML
		$file = $propertyID . '.xml';
		$fh   = fopen( $file, "w" );

		//Initiate a new curl session
		$ch = curl_init( $url );
		//Don't require header this time as curl_getinfo will tell us if we get HTTP 200 or 401
		curl_setopt( $ch, CURLOPT_HEADER, 0 );
		//Provide Token in header
		curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Authorization: Basic ' . $_SESSION['token'] ) );
		//Write returned XML to file
		curl_setopt( $ch, CURLOPT_FILE, $fh );
		//Execute the curl session
		curl_exec( $ch );

		//Store the curl session info/returned headers into the $info array
		$info = curl_getinfo( $ch );

		//Check if we have been authorised or not
		if ( $info['http_code'] == '401' ) {
			getToken( $url );
			//echo 'Token Failed - getToken() has been run!<br />';
		} elseif ( $info['http_code'] == '200' ) {
			//echo 'Token Worked - Success';
		}

		//Close the curl session
		curl_close( $ch );
		//Close the open file handle
		fclose( $fh );

	} else {

		//Run the getToken function above if we are not authenticated
		getToken( $url );

	}

}

//Function to connect to the API authenticating ourself with the token we have been given
function connectGetPropertyList( $url ) {
//	echo $_SESSION['token'] . '*******SESSION Token*********';
	//If token is not set skip to else condition to request a new token
	if ( ! empty( $_SESSION['token'] ) ) {
		//echo 'You are successfully running connectGetPropertyList function';
		//Set a new file name and create a new file handle for our returned XML
		$file = "propertylist.xml";
		$fh   = fopen( $file, "w" );

		//Initiate a new curl session
		$ch = curl_init( $url );
		//Don't require header this time as curl_getinfo will tell us if we get HTTP 200 or 401
		curl_setopt( $ch, CURLOPT_HEADER, 0 );
		//Provide Token in header
		curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Authorization: Basic ' . $_SESSION['token'] ) );
		//Write returned XML to file
		curl_setopt( $ch, CURLOPT_FILE, $fh );
		//Execute the curl session
		curl_exec( $ch );

		//Store the curl session info/returned headers into the $info array
		$info = curl_getinfo( $ch );

		//Check if we have been authorised or not
		if ( $info['http_code'] == '401' ) {
			getToken( $url );
			//echo 'Token Failed - getToken() has been run!<br />';
		} elseif ( $info['http_code'] == '200' ) {
			echo 'Token Worked - Success<br />';
			checkForPropertyList();
		}

		//Close the curl session
		curl_close( $ch );
		//Close the open file handle
		fclose( $fh );

	} else {
//		echo $_SESSION['token'] . '*******SESSION Token*********';
		echo 'Sorry the token wasnt authorised';
		getToken( $url );
	}

}

function createPropertylistWithoutAuthentication( $url ) {
	//Set a new file name and create a new file handle for our returned XML
	$file = "propertylist.xml";
	$fh   = fopen( $file, "w" );

	//Initiate a new curl session
	$ch = curl_init( $url );
	//Don't require header this time as curl_getinfo will tell us if we get HTTP 200 or 401
	curl_setopt( $ch, CURLOPT_HEADER, 0 );
	//Provide Token in header
	curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Authorization: Basic ' . $_SESSION['token'] ) );
	//Write returned XML to file
	curl_setopt( $ch, CURLOPT_FILE, $fh );
	//Execute the curl session
	curl_exec( $ch );

	//Store the curl session info/returned headers into the $info array
	$info = curl_getinfo( $ch );

	//Check if we have been authorised or not
	if ( $info['http_code'] == '401' ) {
		getToken( $url );
		//echo 'Token Failed - getToken() has been run!<br />';
	} elseif ( $info['http_code'] == '200' ) {
		echo 'Token Worked - Success';
		checkForPropertyList();
	}

	//Close the curl session
	curl_close( $ch );
	//Close the open file handle
	fclose( $fh );

}

// Close mySQL connection

if ( $canCloseDatabase ) {
	$closed = mysqli_close( $con );
}


if ( $closed ) {
	//echo "Connection now closed";
	//unlink ('propertylist.xml');
} else {
	//echo "There is a problem closing the database";
}

//echo 'All code was successfully run';
//print_r($propertiesInArray);
$propertiesArrayCount = count( $propertiesInArray );

for ( $i = 0; $i < $propertiesArrayCount; $i ++ ) {

	unlink( $propertiesInArray[ $i ] . '.xml' );   //This part deletes the XML files after import into the database.
	echo '<br /> Deleting XML file of property number ' . $propertiesInArray[ $i ];

}

//session_destroy();
?>