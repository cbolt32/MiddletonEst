<?php
//training connection
//try {
//    $pdo = new PDO('mysql:host=localhost;dbname=chris', 'jokeUser', 'boltspurs');
//    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $pdo->exec('SET NAMES "utf8"');
//
//}
//catch (PDOException $e)
//{
//    $output = 'Unable to connect to the database server. ' . $e->getMessage();
//    include 'error.html.php';
//    exit();
//}

try {
    $pdo = new PDO('mysql:host=localhost;dbname=Middleton_Dev', 'vebraAdmin', 'boltspurs');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');

}
catch (PDOException $e)
{
    $output = 'Unable to connect to the database server. ' . $e->getMessage();
    include 'error.html.php';
    echo $output;
    exit();
}

include_once $_SERVER['DOCUMENT_ROOT']  . '/components/php/pagination.php';

//creates variable for pagination connetion to db
$paginate = new paginate($pdo);