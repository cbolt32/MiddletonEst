<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 11/12/2015
 * Time: 21:35
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

try
{
    $sql = 'UPDATE joke SET jokedate="2012-04-01"
            WHERE joketext LIKE "%chicken%"';
    $affectedRows = $pdo->exec($sql);
}
catch (PDOException $e)
{
    $output = 'Error performing update: ' . $e->getMessage();
    include 'output1.html.php';
    exit();
}

$output = "Update $affectedRows rows.";
include 'output1.html.php';