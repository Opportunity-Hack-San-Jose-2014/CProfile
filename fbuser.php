<?php 
require "src/facebook.php";
$fbUserId = $_GET['id'];

//Client Token = 51e6a21e30d5b788803bd4cef0d67d55
//App Token = 416953548436326|zi97zZZUsvJ-gbRdGVYltt7H0H0
$appId = '416953548436326';
$secret = '7a4357cb66b6a3d9e05e0fe4993ebbfa';
$pageId = '1497426170539014'; //'416953548436326'

$pageProfile = '';
$pagePosts = '';
try {
	$facebook = new Facebook(array(
			'appId'  => $appId,
			'secret' => $secret
	));
	
	//$userDetails   = $facebook->api('user/'.$fbUserId);
	$userDetails   = $facebook->api('user/10152530864913533');
	$userDetailsJSON = json_encode($userDetails);
	
	//echo 'My Page profile<hr>';
	//print_r($pageProfile);
	//echo '<hr>My Page wall<hr>';
	//print_r($pagePosts);
	
}
catch (Exception $ex)
{
	echo $ex;
}
include 'topmenu.php';
?>
<div id="fbPosts">&nbsp;</div>
</BODY>
</HTML>
<script>
	var fbUserDetails = <?=$userDetailsJSON?>;
	function f1() {	
		var fbPostHtml = '';
		alert (fbUserDetails);
// 		for (i=0; i<fbUserDetails['data'].length; i++) {
// 			//alert(fbPosts['data'][i]['message']);
// 			fbPostHtml = fbPostHtml + '<tr>';
// 			fbPostHtml = fbPostHtml + '<td>'+fbPosts['data'][i]['created_time']+'</td>';
// 			fbPostHtml = fbPostHtml + '<td><a href=fbuser.php?id='+fbPosts['data'][i]['from']['id']+'>'+fbPosts['data'][i]['from']['name']+'</a></td>';
// 			fbPostHtml = fbPostHtml + '<td>'+fbPosts['data'][i]['message']+'</td>';
// 			fbPostHtml = fbPostHtml + '</tr>';
// 		}
// 		fbPostHtml = '<table border=1>'+fbPostHtml+'</table>';
// 		document.getElementById("fbPosts").innerHTML = fbPostHtml;
		//alert(fbPostHtml);
	} 
</script>