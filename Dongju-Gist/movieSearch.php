  #!/usr/bin/php
  <?php
  require_once('path.inc');
  require_once('get_host_info.inc');
  require_once('rabbitMQLib.inc');
   
  include('compar.php');
  include('fetchAPI2.php');
  
  function requestProcessor($request)
  {
          var_dump($request);
          echo "received request".PHP_EOL;
          echo print_r($request);
          if(!isset($request['type']))
          {
            return "Error: unspported message type";
          }
          switch($request['type'])
          {
          case "search":
                  $result = array();
                  array_push($result, collectData($request['Title']));
                  return $result;
                  echo $result;
          case "check":
                  $result = array();
                  array_push($result, collectData($request['Title']));
                  return compar($result, $request['Title']);
          //
          }return array("returnCode" => '0', 'message'=> $result);
  }
  
  $server=new rabbitMQServer("testRabbitMQ.ini", "testServer");
  $server->process_requests('requestProcessor');
  //$server->process_requests('returnInput');
  exit();
  ?>
