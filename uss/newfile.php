<?php
	require_once('OAuth.php');
	require_once('twitteroauth.php');

	echo "Hello<hr>";
	function getConnectionWithAccessToken($oauth_token, $oauth_token_secret) {
		$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $oauth_token, $oauth_token_secret);
		return $connection;
	}
	
	$connection = getConnectionWithAccessToken("abcdefg", "hijklmnop");
	$content = $connection->
	
	get("statuses/home_timeline");
	echo $content;
	
/*
 * // Create curl resource 
$ch = curl_init(); 
// Set url 
curl_setopt($ch, CURLOPT_URL, "http://twitter.com/statuses/user_timeline/myscreenname.json?count=10"); 
// Return the transfer as a string 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
// $output contains the output string 
$output = curl_exec($ch); 
// Close curl resource to free up system resources 
curl_close($ch);

if ($output) 
{
    $tweets = json_decode($output,true);

    foreach ($tweets as $tweet)
    {
        print_r($tweet);
    }
}
 */	
?>