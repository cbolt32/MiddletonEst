<?php
//		Connect to DB
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

//		Select All props
$select = 'SELECT *';
$from   = '$vebraproperties';
//		 $where = ''

$placeholder = [ 'vebraid' ];


try
{
	$stmt    = $pdo->query( 'SELECT * FROM $vebraproperties' );
	$results = $stmt->fetchAll( PDO::FETCH_ASSOC );
} catch ( PDOException $e ) {
	$e = 'Error fetching Results.';
	include 'error.html.php';
	exit();
}

$result = $pdo->prepare( 'SELECT databaseid, agentref, area, available, address_name, address_street, address_locality, address_custom FROM
$vebraproperties' );
$result->execute();


