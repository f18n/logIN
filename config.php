<?php
session_start();
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = "blabla"; //Google CLIENT ID
$clientSecret = 'blabla'; //Google CLIENT SECRET
$redirectUrl = "blabla";  //return url (url to script) or place your folder script
$homeUrl = 'blabla';  //return to home

##################################

$gClient = new Google_Client();
$gClient->setApplicationName('blabla'); //can set or not
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>
