<?php
/*
Vebra XML API Integration With PHP Example
Author: Joe Harvey
Last Modified: 20-10-2011

READ ME:
- Please enter your login credentials and Data Feed ID below
- The following functions will attempt to connect to the given URL using a token stored in a session value
- If no session value exisits then it will request one.
- Returned tokens are written to a text file along with their approximate start and expire times for your reference
- Returned headers and returned XML (on success) are also written to txt files
- All of these files are saved to the parent folder where you run this script from. You must ensure that folder has Write permissions!
- Should you loose you session token (by clearing cookies and/or closing the browser) you can enter the token manualy from the tokens.txt file
*/

require 'vendor/autoload.php';

$username = "middletonun";  // Put your SQL username in the quotes
$password = "W@TDhi48";	// Put SQL password in the quotes
$datafeedID = "MIDDLETONAPI";	// Put the datafeed ID in the quotes, I think this is something Vebra provide it's been a while I can't rememeber.
$clientID = "29509";		// Put the Client ID in the quotes (provided by Vebra)
$branchID = "1";		// Branch ID provided by Vebra
//$version = "9";				// Version of the API...was v4 at the time of creation.

//$request = "http://webservices.vebra.com/export/$datafeedID/v$version/branch/$clientID/property";		// This API call gets the list of all the properties available.  You can see this in the API call provided by Vebra

$tokenStorage = new \YDD\Vebra\TokenStorage\File($username, __DIR__.'/tokens/');

use YDD\Vebra\API as VebraAPI;
use YDD\Vebra\TokenStorage\File as TokenStorageFile;
use Buzz\Client\Curl as BuzzClientCurl;
use Buzz\Message\Factory\Factory as BuzzMessageFactory;

$api = new VebraAPI(
		$datafeedID,
		$username,
		$password,
		new TokenStorageFile($username, __DIR__.'/tokens/'),
		new BuzzClientCurl(),
		new BuzzMessageFactory()
);