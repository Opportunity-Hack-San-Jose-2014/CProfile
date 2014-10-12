<?php 
require "../src/facebook.php";
$pageId = $_GET['p'];
//Client Token = 51e6a21e30d5b788803bd4cef0d67d55
//App Token = 416953548436326|zi97zZZUsvJ-gbRdGVYltt7H0H0
$appId = '416953548436326';
$secret = '7a4357cb66b6a3d9e05e0fe4993ebbfa';
if ($pageId=="")
	$pageId = '1557172387844129'; //This is OpportunityHack //1497426170539014  (CProfile.org) //'416953548436326' (Something else)

$pageProfile = '';
$pagePosts = '';
try {
	$facebook = new Facebook(array(
			'appId'  => $appId,
			'secret' => $secret
	));
	
// 	$pageProfile = $facebook->api($pageId);
	$pagePosts   = $facebook->api($pageId . '/feed');
	$pagePosts = json_encode($pagePosts);
	echo $pagePosts;
}
catch (Exception $ex)
{
	echo $ex;
}
?>