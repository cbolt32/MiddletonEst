<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 09/12/2015
 * Time: 21:57
 */
try {
    $pdo = new PDO('mysql:host=localhost;dbname=chris', 'jokeUser', 'boltspurs');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');

}
catch (PDOException $e)
{
    $output = 'Unable to connect to the database server. ' . $e->getMessage();
    include 'output.html.php';
    exit();
}

$output = "Database connection established.";
include 'output.html.php';