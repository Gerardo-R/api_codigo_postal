<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('176441834429-2h50unef6fnfgveega97ejrn20mdpfem.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/api_Codigo_Postal/Oauth/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 
