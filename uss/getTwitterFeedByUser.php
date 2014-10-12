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
	
	echo $json;
?>