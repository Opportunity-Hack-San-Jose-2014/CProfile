<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Welcome to Uppuluri.com, the cyberhome of Uppuluri family</TITLE>
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="USS UPPULURI SREENIVASA SREEKANTH KHAMMAM RIT NATIONAL INSTITUTE OF TECHNOLOGY JAMSHEDPUR">
<META NAME="Description" CONTENT="USS UPPULURI SREENIVASA SREEKANTH KHAMMAM RIT NATIONAL INSTITUTE OF TECHNOLOGY JAMSHEDPUR">
</HEAD>

<BODY>
 <script src="http://static.ak.connect.facebook.com/connect.php/en_US" type="text/javascript"></script><script type="text/javascript">FB.init("ca74672d70d29d47fc43b22eb88053cc");</script>
<font face=arial size=+1 strong>
<center></center>
<table width="98%" align="center">
	<tr>
		<td width="20%" align="left" valign="top">
			<table>
				<tr>
					<td>
			<fb:profile-pic uid="loggedinuser" size="square" facebook-logo="true"></fb:profile-pic>
					</td>
					<td>
			<fb:name uid="loggedinuser" useyou="false" linked="true"></fb:name>
					</td>
				</tr>
			</table>
		</td>
		<td align="left" valign="bottom" rowspan="2">
			<font face="tahoma" size=+1>
				Welcome to www.uppuluri.com!
			</font>
		</td>
		<td width="50%" align="right" valign="top"><font face="tahoma" size=+1><i>Maximize.. Manage.. Motivate..</i></font></td>
	</tr>
	<tr>
		<td align="left" valign="bottom">
			<fb:login-button v="2" size="medium" onlogin="window.location.reload(true);">Connect with Facebook</fb:login-button>
		</td>
		<td align="right" valign="bottom">
			<a href="index.php">Home</a> | 
			<b>Twitter</b> | 
			<a href="res.html">Resources</a> | 
			<a href="https://webmailcluster.perfora.net/xml/webmail">Email</a> | 
			<a href="gallery.html">Image Gallery</a> | 
			<a href="familytree.html">Family Tree</a> 
		</td>
	</tr>
</table>
<hr>
<table width="98%" align="center">
	<tr>
		<td align="center" colspan="2">
			Welcome to my Tweets!!<br><hr><br>
		</td>
	</tr>
	<tr>
		<td width="75%" valign="top" bgcolor="#eeeeee">
<?php
function buildBaseString($baseURI, $method, $params) {
	$r = array();
	ksort($params);
	foreach($params as $key=>$value){
		$r[] = "$key=" . rawurlencode($value);
	}
	return $method."&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));
}

function buildAuthorizationHeader($oauth) {
	$r = 'Authorization: OAuth ';
	$values = array();
	foreach($oauth as $key=>$value)
		$values[] = "$key=\"" . rawurlencode($value) . "\"";
	$r .= implode(', ', $values);
	return $r;
}

$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
//$url = "https://api.twitter.com/1.1/statuses/user_timeline.json?count=200&include_rts=false";
//$url = "https://api.twitter.com/1.1/statuses/user_timeline.json?count=100";

$consumer_key = "stuimfiMJgb5QuG04pXtG5JpM";
$consumer_secret = "L0WYyqBiggQX8xJjjx44BDfLWzMqrZrHqgDjbLz4mM6htNZxmc";
$oauth_access_token = "65933981-9CwBgIwIDhCb7hmmuAX9rTwxAWWGlDbVvGJ3xAMEB";
$oauth_access_token_secret = "xT4RHtxIleQvCtZ5ZQzvmi7LoC00z29NL8A60SHnEBZ2p";

$oauth = array( 'oauth_consumer_key' => $consumer_key,
		'oauth_nonce' => time(),
		'oauth_signature_method' => 'HMAC-SHA1',
		'oauth_token' => $oauth_access_token,
		'oauth_timestamp' => time(),
		'oauth_version' => '1.0');

$base_info = buildBaseString($url, 'GET', $oauth);
$composite_key = rawurlencode($consumer_secret) . '&' . rawurlencode($oauth_access_token_secret);
$oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));
$oauth['oauth_signature'] = $oauth_signature;

// Make requests
$header = array(buildAuthorizationHeader($oauth), 'Expect:');
$options = array( CURLOPT_HTTPHEADER => $header,
		//CURLOPT_POSTFIELDS => $postfields,
		CURLOPT_HEADER => false,
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_SSL_VERIFYPEER => false);

$feed = curl_init();
curl_setopt_array($feed, $options);
$json = curl_exec($feed);
curl_close($feed);

$twitter_data = json_decode($json);

$hashTagsAll = "";
foreach ($twitter_data as $tweet)
{
	//print_r($tweet);
	$tweetId = $tweet->id_str;
	$entities = $tweet->entities;
	$hashTag = $entities->hashtags;
	$tweetTxt = $tweet->text;
	if (count($hashTag)>0) {
		foreach ($hashTag as $ht) {
			$hashTagsAll .= $ht->text."<br>";
			echo "<font color='green'><b>".$tweetTxt."</b></font><br>";
		}
	}
	elseif (strpos($tweetTxt, "LOOK")>0) {
		//echo "<font color='red'>".$tweetTxt."</font><br>";
	}
	else {
		echo "<font color='blue'>".$tweetTxt."</font><br>";
		//print_r($tweet);
	}
	echo "<br>";
}

?>
		</td>
		<td width="25%" valign="top" align="left" bgcolor="#cccccc">
		My Hashtags...<br><br><br>
<?php 
	echo $hashTagsAll;
?>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" colspan="2">
		<!--
			<a href="http://messenger.yahoo.com/edit/send/?.target=uss1049">
				<img border="0" src="http://opi.yahoo.com/yahooonline/u=uss1049/m=g/t=15/l=us/opi.gif">
			</a>
		-->
		</td>
		<td align="right" valign="top" colspan="2">
		</td>
	</tr>
</table>
</font>

</BODY>
</HTML>