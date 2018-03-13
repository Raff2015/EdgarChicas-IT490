#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');
$client = new rabbitMQClient("testRabbitMQ.ini", "testServer");
$test2 = array();
array_push($test2, "people", "hello", "guardians");
$repsonse = array();
$response['Title']=$test2;
$response['type']="search";
$response=$client->send_request($response);
?>
