#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');
$client = new rabbitMQClient("testRabbitMQ.ini", "testServer");

$test2 = array();
array_push($test2, "people", "hello", "guardians", "train");
$repsonse = array();
$response['Title']=$test2;
$response['type']="search";
$response=$client->send_request($response);

//echo "\n\n";
//echo $argv[0]." END".PHP_EOL;
//
//if (isset($argv[1]))
//{
// $msg = $argv[1];
//}
//else
//{
// $msg = "test message";
//}

?>
