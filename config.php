<?php
    // OAUTH Configuration
    $oauthClientID = '262840822742-rst3o7ltq4skk68rumbjcon9jkj0e75m.apps.googleusercontent.com';
    $oauthClientSecret = 'DHf_GFHo6ZfVzILS8H0z9FKX';
    $baseUri = 'http://localhost:8080/ytube/';
    $redirectUri = 'http://localhost:8080/ytube/youtube_upload.php';
    
    define('OAUTH_CLIENT_ID',$oauthClientID);
    define('OAUTH_CLIENT_SECRET',$oauthClientSecret);
    define('REDIRECT_URI',$redirectUri);
    define('BASE_URI',$baseUri);
    
    // Include google client libraries
    require_once 'src/autoload.php'; 
    require_once 'src/Client.php';
    require_once 'src/Service/YouTube.php';
    session_start();
    
    $client = new Google_Client();
    $client->setClientId(OAUTH_CLIENT_ID);
    $client->setClientSecret(OAUTH_CLIENT_SECRET);
    $client->setScopes('https://www.googleapis.com/auth/youtube');
    $client->setRedirectUri(REDIRECT_URI);
    
    // Define an object that will be used to make all API requests.
    $youtube = new Google_Service_YouTube($client);
    
?>