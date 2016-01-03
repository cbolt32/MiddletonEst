<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 09/12/15
 * Time: 18:03
 */

$firstName = $_REQUEST['firstName'];
$lastName = $_REQUEST['lastName'];
//echo 'Welcome to our website, ' . htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' .
//    htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';

if ($firstName == 'Kevin' && $lastName == 'Yank')
{
    echo 'Welcom, oh Glorious leader!';
}
else
{
    echo 'Welcome to our website, ' . htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' '
                                    . htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';
}



require 'vendor/autoload.php';

use YDD\Vebra\API as VebraAPI;
use YDD\Vebra\TokenStorage\File as TokenStorageFile;
use Buzz\Client\Curl as BuzzClientCurl;
use Buzz\Message\Factory\Factory as BuzzMessageFactory;


//Now that we have the required parameters and objects, we can create an instance of the API:


$api = new VebraAPI(
    'datafeedid',
    'username',
    'password',
    new TokenStorageFile('username', __DIR__.'/tokens/'),
    new BuzzClientCurl(),
    new BuzzMessageFactory()
);
//Retrieve all the branches (as an iterable collection of branch summary objects):

$branchSummaries = $api->getBranches();
echo $branchSummary;

//Iterate over the branch summary objects and retrieve branch objects for each one:

    foreach ($branchSummaries as $branchSummary) {
        $branch = $api->getBranch($branchSummary->getClientId());
        echo $branch;
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


?>