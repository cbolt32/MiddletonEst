<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 09/12/2015
 * Time: 20:59
 */

if ( !isset($_REQUEST['firstName']))
{
    include 'form.html.php';
}
else
{
    $firstName = $_REQUEST['firstName'];
    $lastName = $_REQUEST['lastName'];
    if ($firstName == 'Kevin' and $lastName ==  'Yank')
    {
        $output = 'Welcome, oh glorious leader!';
    }
    else
    {
        $output = 'Welcome to our website, ' .
            htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' .
            htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';
    }
    include 'welcome.html.php';
}