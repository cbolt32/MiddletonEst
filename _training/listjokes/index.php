<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 11/12/2015
 * Time: 22:17
 */
try {
    $pdo = new PDO('mysql:host=localhost;dbname=chris', 'jokeUser', 'boltspurs');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');

}
catch (PDOException $e)
{
    $output = 'Unable to connect to the database server. ' . $e->getMessage();
    include 'error.html.php';
    exit();
}

try
{
    $sql = 'SELECT joketext FROM joke';
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    $error = 'Error fetching jokes: ' . $e->getMessage();
    include 'error.html.php';
    exit();
}

while ($row = $result->fetch())
{
    $jokes[] = $row['joketext'];
}

include 'jokes.html.php';