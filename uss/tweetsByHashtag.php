<?php
require_once('TwitterAPIExchange.php');
require_once('settings.php');

$settings = array(
		'oauth_access_token' => $oauth_access_token,
		'oauth_access_token_secret' => $oauth_access_token_secret,
		'consumer_key' => $consumer_key,
		'consumer_secret' => $consumer_secret
);

$url = 'https://api.twitter.com/1.1/search/tweets.json';
$requestMethod = 'GET';
$getfield = '?q=#opportunityhacksjc&result_type=recent';

// Perform the request
$twitter = new TwitterAPIExchange($settings);
$twitter_json = $twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest();
$twitter_data = json_decode($twitter_json);
echo $twitter_json;
echo count($twitter_data)." Tweet(s) found!!!<br>";

foreach ($twitter_data as $tweet)
{
	//print_r($tweet);
	$tweetId = $tweet->id_str;
// 	$entities = $tweet->entities;
// 	$hashTag = $entities->hashtags;
	$tweetTxt = $tweet->text;
	echo "<font color='green'><b>".$tweetTxt."</b></font><br>";
	echo "<br>";
}

?>
<body onload="f1()">
	<div id="d1">
	</div>
</body>
<script>
	var tweetsData=<?=$twitter_json?>;
	function f1() {
		var strDisplay='';
		for (i=0; i<tweetsData['statuses'].length; i++)
		{
			strDisplay += '<tr><td>'+tweetsData['statuses'][i]['created_at'] + '</td>';
			strDisplay += '<td>'+tweetsData['statuses'][i]['created_at'] + '</td>';
			strDisplay += '<td>'+tweetsData['statuses'][i]['created_at'] + '</td></tr>';
						//alert(strDisplay);
		}
		document.getElementById('d1').innerHTML = '<table border=1><tr><th>Time</th><th>By</th><th>Status</th></tr>'+strDisplay+'</table>';
	}
</script>