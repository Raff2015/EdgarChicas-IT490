##DongJu Gist Files

<?php
  2 
  3 function collectData($arr){
  4  //first, take all the titles in an array.
  5  $parcedArr = array();
  6   if ($arr===array())
  7   {
  8   for($i=0;$i<count($arr);$i++)
  9   {
 10    array_push($parcedArr, $arr[$i]);
 11    array_pop($arr[$i]);
 12   }
 13 
 14   for ($i=0; $i < count($parcedArr); $i++){
 15    $thisString = $parcedArr[$i];
 16    settype($thisString, "string");
 17    $url = 'https://omdbapi.com/?apikey=b73b01cf&t='.$thisString;
 18    $cURL = curl_init();
 19    curl_setopt($cURL, CURLOPT_URL, $url);
 20    curl_setopt($cURL, CURLOPT_HTTPGET, true);
 21    curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
 22         'Content-Type: application/json',
 23         'Accept: application/json'
 24    ));
 25    curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
 26    $result = curl_exec($cURL);
 27    $json = json_decode($result, true);
 28    $final = array(
 29         "Title" => $json['Title'],
 30         "Director" => $json['Director'],
 31         "Runtime" => $json['Runtime'],
 32         "Actors" => $json['Actors']
 33    );
 34    return $final;
 35   //array_push($final, $json['Title'], $json['Director'], $json['Runtime']);
 36    echo print_r( $final);
 37 
 38   } echo "Automatic Collection Finished.".PHP_EOL;
 39  }
 40  else{
 41   $thisString = $arr;
 42   settype($thisString, "string");
 43   $url = 'https://omdbapi.com/?apikey=b73b01cf&t='.$thisString;
 44   $cURL = curl_init();
 45   curl_setopt($cURL, CURLOPT_URL, $url);
 46   curl_setopt($cURL, CURLOPT_HTTPGET, true);
 47   curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
 48           'Content-Type: application/json',
 49           'Accept: application/json'
 50   ));
 51   curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
 52   $result = curl_exec($cURL);
 53   $json = json_decode($result, true);
 54   $final = array(
 55           "Title" => $json['Title'],
 56           "Director" => $json['Director'],
 57           "Runtime" => $json['Runtime'],
 58           "Actors" => $json['Actors']
 59   );
 60      return $final;
 61      echo print_r( $final);
 62 
 63  }
 64 }
 65 ?>
