#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');
include('fetchAPI.php');


//This function will check the difference between
//two arrays. If there is a discrepency, it will return
//values in array 1 that are not in array 2.
//if there is no mismatch, it will print no change needed.
function checkDiff($arr1, $arr2){
	$result = array_diff($arr1, $arr2);
	if($result==[]){
		echo "No update necessary.";
	}
	else{
		echo "Field(s) below need to be changed."."\n";
		return $result;
	}
}

function requestProcessor($request)
{
	var_dump($request);
        echo "received request".PHP_EOL;
	//echo print_r($request);
 	if(!isset($request['type']))
        {
 	  return "Error: unspported message type";
 	}
 	switch($request['type'])
 	{
  	case "search":
		$result=array();
		$movieTitle=array();
		if(count($request['Title']>1)){
		  for($i=0; $i<count($request['Title']); $i++)
 		  {
		    array_push($movieTitle, $request['Title'][$i]);
		    $input=implode("", $movieTitle);
		    array_pop($movieTitle);
		    array_push($result, collectData($input));
		  }
		  print_r($result);
		}
		$msg = new AMQPMessage(implode(" ", $result));
		$channel->basic_publish($msg, 'testQueue');
		return array("returnCode" => '0', 'message'=> $result);

    	case "check":
    		//store value in local data to an array.
    		//filter the array, therefore only items in an array that matches
    		//"Title", "Director", "Runtime", "Actors" will be included in a result array.
    		$localData = file("autoData");
		$result = array();
		foreach($localData as $line){
			if(stripos($line, "Title")>-1 | stripos($line, "Director")>-1 |stripos($line, "Runtime")>-1 | stripos($line, "Actors">-1)){
				array_push($result, $line);
			}
		}
		$final = array();
		//this will go through for amount of titles requested,
		//then include necessary changes to a new array named final.
		for($i=0; $i<count($request['Title']);$i++){
			array_push($final, checkDiff($result, $request['Title']));
		}
		return array("returnCode"=>'0', 'message'=>$final);	
		/*if(isset($request['Director'])){

		}*/
  	}//return array("returnCode" => '0', 'message'=> $result);
}

$server=new rabbitMQServer("testRabbitMQ.ini", "testServer");
$server->process_requests('requestProcessor');
//$server->process_requests('returnInput');
exit();

$channel->close();
$connection->close();

?>
