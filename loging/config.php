<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google\Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('603875568345-u14lckrnf21jeonrgm0i1defnessfuid.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost:8080/MKCCC/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>