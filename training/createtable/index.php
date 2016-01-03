<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 11/12/2015
 * Time: 21:21
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
    $sql = 'CREATE TABLE joke
(
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        joketext TEXT,
        jokedate DATE NOT NULL
)       DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';
    $pdo->exec($sql);
}
catch (PDOException $e)
{
    $output = 'Error creating joke table: ' . $e->getMessage();
    include 'output2.html.php';
    exit();
}

$output = 'Joke table succesfully created.';
include 'output2.html.php';