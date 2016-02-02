<?php

//******************TODO WORKING CODE!!!!*********************
include_once $_SERVER['DOCUMENT_ROOT'] .
'/includes/magicQuotes.inc.php';

//Display search form
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

/*
 * Query to populate are dropdown from current properties
 */


//Selects  unique values for location search dropdown, lower cased to prevent case sensitive dupelication
try
{
	$result = $pdo->query('SELECT DISTINCT LOWER(available) AS available FROM `$vebraproperties` ORDER BY available');


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

/*
 * Creates query to display all rows in table,
 * Use pagination class /components/php/pagination.php to
 * generate page links based on selected records per page
 *
 *
 */

/*
 * Pagination
 */

//sets pagination query, displays all datat
$query = "SELECT * FROM property JOIN propertypara ON property.propertyID=propertypara.propertyID ";
//sets pagination display per page
$records_per_page=10;
//creates new query var with to calc pages for records
$newquery = $paginate->paging($query,$records_per_page);

//^^^^^^^^^^^^^^^^^^^^^^^^^TODO WORKING CODE!!!!^^^^^^^^^^^^^^^^^^^^^^


//if ($_GET['buyRent']))todo start filter query build


/*
 * Search Filter
 */

//Search results from filter //todo the below results in an output!!
/*
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
		if ($row <= array('beds' => $row['databaseid'])) {
			$properties[] = array( 'beds' => $row['databaseid'] );
		}else
		{
			echo "Your Search criteria returned no matches";
		}
	}

//	header('Location: . search.php');

	include $_SERVER['DOCUMENT_ROOT'] . '/components/php/snippet-searchResults.php';
	exit();
}


*/