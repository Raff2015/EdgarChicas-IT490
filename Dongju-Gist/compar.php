1 <?php
  2 $localData = file_get_contents("autoData");
  3 $localData = json_decode($localData, true);
  4 $testArray = array(
  5   'Title'=>'Test';
  6   'Director'=>'TestDir';
  7   'Runtime'=>'164 min';
  8   'ACtors'=>'testAct1', 'testAct2';
  9 );
 10 
 11 function checkDiff($localData, $arr1){
 12  if($localData == $arr1){
 13         echo "No change necessary.";
 14  }
 15 else{
 16  foreach($arr1 in $localData){
 17     $difference = array_diff($localData, $arr1);
 18     echo "Changes necessary. Following needs to be changed into:";
 19     return($difference);
 20     print_r($difference);
 21   }
 22  }
 23 }
~       
