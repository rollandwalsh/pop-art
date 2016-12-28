<?php
require 'tmhOAuth.php'; // Get it from: https://github.com/themattharris/tmhOAuth
// Use the data from http://dev.twitter.com/apps to fill out this info
// notice the slight name difference in the last two items)
$connection = new tmhOAuth(array(
	'consumer_key' => 'KDjMJg1GzqmD8x4s6JP5ssdR5',
	'consumer_secret' => '5tfiDc2dMtmRCQd7wZeE2LJYgXISmvBBuWvekd6TjdgSIPUA8d',
	'user_token' => '3024757453-bVErf7ZfDaiWAO5Xvf6rdNqktrxLmzDSqLuouPk', //access token
	'user_secret' => '2O7Hllnt5fLaGBsB3p86pkwRRcTczaMkhW33ktmallpvH' //access token secret
));
// set up parameters to pass
$parameters = array();
if ($_GET['count']) {
	$parameters['count'] = strip_tags($_GET['count']);
}
if ($_GET['screen_name']) {
	$parameters['screen_name'] = strip_tags($_GET['screen_name']);
}
if ($_GET['twitter_path']) { $twitter_path = $_GET['twitter_path']; }  else {
	$twitter_path = '1.1/statuses/user_timeline.json';
}
$http_code = $connection->request('GET', $connection->url($twitter_path), $parameters );
if ($http_code === 200) { // if everything's good
	$response = strip_tags($connection->response['response']);
	if ($_GET['callback']) { // if we ask for a jsonp callback function
		echo $_GET['callback'],'(', $response,');';
	} else {
		echo $response;	
	}
} else {
	echo "Error ID: ",$http_code, "<br>\n";
	echo "Error: ",$connection->response['error'], "<br>\n";
}
