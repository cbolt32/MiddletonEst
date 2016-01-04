<?php

//Build list of Areas
try
{
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
$areas = $pdo->query('SELECT id address_town FROM vebraproperties ');
}
catch (PDOException $e)
{
$error = 'Error fetching list of areas.';
include 'error.html.php';
exit();
}
foreach ($result as $row)
{
$areas[] = array('address_town' => $row['address_town'], 'vebraproperties' => $row['vebraproperties']);
}