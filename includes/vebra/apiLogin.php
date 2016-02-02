
<?php

//Link to the mySQL database


session_start();

$closed = "";

/*Define Your Unique Variable Here:*/
$username = "middletonun";  // Put your SQL username in the quotes
$password = "W@TDhi48";	// Put SQL password in the quotes
$datafeedID = "MIDDLETONAPI";	// Put the datafeed ID in the quotes, I think this is something Vebra provide it's been a while I can't rememeber.
$clientID = "29509";		// Put the Client ID in the quotes (provided by Vebra)
$branchID = "1";		// Branch ID provided by Vebra
$version = "9";				// Version of the API...was v4 at the time of creation.

$request = "http://webservices.vebra.com/export/$datafeedID/v$version/branch/$clientID/property";		// This API call gets the list of all the properties available.  You can see this in the API call provided by Vebra

?>