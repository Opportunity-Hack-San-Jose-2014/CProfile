<?php 
require "/src/facebook.php";
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
	
	$pageProfile = $facebook->api($pageId);
	$pagePosts   = $facebook->api($pageId . '/feed');
	$pagePosts = json_encode($pagePosts);
}
catch (Exception $ex)
{
	echo $ex;
}
include 'topmenu.php';

?>
<script>
	var fbPosts = <?=$pagePosts?>;
	function f1() {	
		var fbPostHtml = '';
		var fbPhotoHtml = '';
				
		for (i=0; i<fbPosts['data'].length; i++) {
			//alert(fbPosts['data'][i]['message']);
			var profId = fbPosts['data'][i]['from']['id'];
			fbPostHtml = fbPostHtml + '<tr>';
			fbPostHtml = fbPostHtml + '<td>'+fbPosts['data'][i]['created_time']+'</td>';
			fbPostHtml = fbPostHtml + '<td><img src=https://graph.facebook.com/'+ profId +'/picture></td>';
			fbPostHtml = fbPostHtml + '<td><a href=fbuser.php?id='+ profId +'>'+fbPosts['data'][i]['from']['name']+'</a></td>';
			fbPostHtml = fbPostHtml + '<td>'+fbPosts['data'][i]['message']+'</td>';
			fbPostHtml = fbPostHtml + '</tr>';
		}
		fbPostHtml = '<table border=1>'+fbPostHtml+'</table>';
		document.getElementById("fbPosts").innerHTML = fbPostHtml;
		//document.getElementById("fbPhotos").innerHTML = fbPhotoHtml;
		//alert(fbPostHtml);
	} 
</script>