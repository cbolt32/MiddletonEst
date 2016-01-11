<?php

//******************TODO WORKING CODE!!!!*********************
include_once $_SERVER['DOCUMENT_ROOT'] .
'/includes/magicQuotes.inc.php';

//Display search form
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';


//Selects  unique values for location search dropdown, lower cased to prevent case sensitive dupelication
try
{
	$result = $pdo->query('SELECT DISTINCT LOWER(available) AS available FROM `$vebraproperties` ORDER BY available'); //todo change col name available in live db
}
catch (PDOException $e)
{
	$error = 'Error fetching areas from database ;( !';
	include 'error.html.php';
	exit();
}

foreach ($result as $row)
{
	$areaSelects[] = array('available' => $row['available']);
}

//^^^^^^^^^^^^^^^^^^^^^^^^^TODO WORKING CODE!!!!^^^^^^^^^^^^^^^^^^^^^^


//Search results from filter //todo the below results in an output!!

if (isset($_POST['action']) and $_POST['action'] == 'search')
{
	include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';



	// The basic SELECT statement
	$select = 'SELECT databaseid';
	$from   = ' FROM $vebraproperties';
	$where  = ' WHERE TRUE';

	$placeholders = array();

	if ($_POST['numOfBedSelect'] != '') // An bed num is selected
	{
		$where .= " AND databaseid = :databaseid";
		$placeholders[':databaseid'] = $_POST['numOfBedSelect'];
	}

	try
	{
		$sql = $select . $from . $where;
		$s = $pdo->prepare($sql);
		$s->execute($placeholders);
	}
	catch (PDOException $e)
	{
		$error = 'Error fetching jokes.';
		include 'error.html.php';
		exit();
	}

	foreach ($s as $row)
	{
//		if ($row <= array('beds' => $row['databaseid'])) {
			$properties[] = array( 'beds' => $row['databaseid'] );
//		}else
//		{
//			echo "Your Search criteria returned no matches";
//		}
	}

//	header('Location: .');

	include $_SERVER['DOCUMENT_ROOT'] . '/components/php/snippet-searchResults.php';
	exit();
}



//foreach ($_POST as $key => $value)
//{
//	echo $value;
//}

// Display search form
//include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
/* //Next search option
try
{
	$result = $pdo->query('SELECT id, name FROM author');
}
catch (PDOException $e)
{
	$error = 'Error fetching authors from database!';
	include 'error.html.php';
	exit();
}

foreach ($result as $row)
{
	$authors[] = array('id' => $row['id'], 'name' => $row['name']);
}

try
{
	$result = $pdo->query('SELECT id, name FROM category');
}
catch (PDOException $e)
{
	$error = 'Error fetching categories from database!';
	include 'error.html.php';
	exit();
}

foreach ($result as $row)
{
	$categories[] = array('id' => $row['id'], 'name' => $row['name']);
}

include 'searchform.html.php';
*/




//Checks if value is set for each search option, and assigns values to vars then echos restults





/*
include 'ydd/vebra/API.php';
include 'ydd/vebra/TokenStorage/File.php';

$tokenStorage = new \YDD\Vebra\TokenStorage\File('middletonun', __DIR__.'/tokens/');

//Now that we have the required parameters and objects, we can create an instance of the API:



use YDD\Vebra\API as VebraAPI;
use YDD\Vebra\TokenStorage\File as TokenStorageFile;
use Buzz\Client\Curl as BuzzClientCurl;
use Buzz\Message\Factory\Factory as BuzzMessageFactory;
$api = new VebraAPI(
		'MIDDLETONAPI',
		'middletonun',
		'W@TDhi48',
		new TokenStorageFile('middletonun', __DIR__.'/tokens/'),
		new BuzzClientCurl(),
		new BuzzMessageFactory()
);

//
//Retrieve all the branches (as an iterable collection of branch summary objects):

$branchSummaries = $api->getBranches();


//Iterate over the branch summary objects and retrieve branch objects for each one:

foreach ($branchSummaries as $branchSummary) {
	$branch = $api->getBranch($branchSummary->getClientId());
}

//The returned branch object has accessors for each of the properties:
echo $branch->getName();

//Retrieve the properties for a given branch (as an iterable collection of property summary objects):
$propertySummaries = $api->getPropertyList($branch->getClientId());

//Iterate over the property summary objects and retrieve property objects for each one:
foreach ($propertySummaries as $propertySummary) {
	$property = $api->getProperty($branch->getClientId(), $propertySummary->getPropId());
}

//The returned property object has accessors for each of the properties:
echo $property->getAddress();

//Retrieve properties which have changed since a given date:
$properties = $api->getChangedProperties(new \DateTime('2012-01-01'));

//Retrieve files which have changed since a given date:
$files = $api->getChangedFiles(new \DateTime('2012-01-01'));


*/
//TODO max must be higher than min

