<?php
include_once("src/facebook.php"); //include facebook SDK

$pageId = '1497426170539014'; //'416953548436326'
######### edit details ##########
$appId = '416953548436326'; //Facebook App ID
$appSecret = '7a4357cb66b6a3d9e05e0fe4993ebbfa'; // Facebook App Secret
$return_url = 'http://www.cprofile.org/myfacebookfeed.php';  //return url (url to script)
$homeurl = 'http://www.cprofile.org/';  //return to home
$fbPermissions = 'publish_stream,manage_pages';  //Required facebook permissions
##################################

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));

$fbuser = $facebook->getUser();
?>