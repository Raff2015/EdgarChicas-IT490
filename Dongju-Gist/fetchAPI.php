<?php
  2 
  3 function collectData($aString){
  4  $thisString = $aString;
  5  settype($thisString, "string");
  6  $url = 'https://omdbapi.com/?apikey=b73b01cf&t='.$thisString;
  7  $cURL = curl_init();
  8  curl_setopt($cURL, CURLOPT_URL, $url);
  9  curl_setopt($cURL, CURLOPT_HTTPGET, true);
 10  curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
 11         'Content-Type: application/json',
 12         'Accept: application/json'
 13  ));
 14  curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
 15  $result = curl_exec($cURL);
 16  $json = json_decode($result, true);
 17  $final = array(
 18         "Title" => $json['Title'],
 19         "Director" => $json['Director'],
 20         "Runtime" => $json['Runtime'],
 21         "Actors" => $json['Actors']
 22  );
 23  return $final;
 24  //array_push($final, $json['Title'], $json['Director'], $json['Runtime']);
 25  echo print_r( $final);
 26 
 27  echo "Automatic Collection Finished.".PHP_EOL;
 28 }
 29 
