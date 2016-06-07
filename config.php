<?php
session_start();
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = "613987527036-1eapc1u94mfgsperpv0vo9gjn5t72ses.apps.googleusercontent.com"; //Google CLIENT ID
$clientSecret = 'zIs6_eAG4x5I5J22NvMTnCP0'; //Google CLIENT SECRET
$redirectUrl = "http://localhost/app/loging/";  //return url (url to script)
$homeUrl = 'http://www.loging.com';  //return to home

##################################

$gClient = new Google_Client();
$gClient->setApplicationName('masuku');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>