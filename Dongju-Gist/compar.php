#!/usr/bin/php
<?php
(include "test14.php");
$localData = (file("autoData"));
$result = array();
foreach($localData as $line){
	if(stripos($line, "Title") > -1 | stripos($line, "Director") > -1 | stripos($line, "Runtime") > -1 | stripos($line, "Actors") > -1){
		array_push($result, $line);
	}
}


/*
function array_psearch($arr, $keyword){
 foreach($arr as $index => $string){
  if (strpos($string, $keyword) !== False){
    return $index+1;
  }
 }
}



$comparison = array("[Title]", "[Director]", "[Runtime]", "[Actors]");
print_r(array_psearch($comparison, "Director"));


echo "count: ".count($result)."\n";

for($i=0; $i<count($result); $i++){
	if((array_psearch($result[$i], "Title")>0)){
	  unset($result[$i]);
	  echo $result[$i]."removed."."\n";
	}
}
*/


$testArray = array(
  'Title'=>'Test',
  'Director'=>'TestDir',
  'Runtime'=>'164 min',
  'Actors'=>'testAct1 '.'testAct2'
);

for($i=0; $i<stripos($result[$i], "Title"); $i++){
  $temp = array();
  array_push($temp, $result[$i]);
  print_r(checkDiff($testArray, $temp));
  array_pop($temp);
}

print_r($temp);

?>
