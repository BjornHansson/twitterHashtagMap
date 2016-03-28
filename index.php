<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/config.php');

$url = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield = '?q=%40twitterapi&result_type=recent';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($twitterSettings);
echo $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();
