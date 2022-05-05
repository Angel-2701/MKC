<?php
 
 // Include the autoloader provided in the SDK
require_once(__DIR__.'/Facebook/autoload.php');

define('APP_ID', '5406897472702844');
define('APP_SECRET', '9fa641c9d04dcfce32813ae28aa8f90f');
define('API_VERSION', 'v2.5');
define('FB_BASE_URL', 'http://localhost:8080/MKCCC/loginfb/');

define('BASE_URL', 'http://localhost:8080/MKCCC/loginfb/');

if(!session_id()){
    session_start();
}


// Call Facebook API
$fb = new Facebook\Facebook([
 'app_id' => APP_ID,
 'app_secret' => APP_SECRET,
 'default_graph_version' => API_VERSION,
]);


// Get redirect login helper
$fb_helper = $fb->getRedirectLoginHelper();


// Try to get access token
try {
    if(isset($_SESSION['facebook_access_token']))
		{$accessToken = $_SESSION['facebook_access_token'];}
	else
		{$accessToken = $fb_helper->getAccessToken();}
} catch(Exception $e) {
     echo 'Facebook API Error: ' . $e->getMessage();
      exit;
} catch(Exception $e) {
    echo 'Facebook SDK Error: ' . $e->getMessage();
      exit;
}

?>