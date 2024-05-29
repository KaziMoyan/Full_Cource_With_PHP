<?php
$fruits = array('a'=> 'apple','b'=>'orange','f'=>'jackfruit','g'=>'banana','s'=>'dates','L'=>'mango');
$numbers = array(11,32,3,4,45,95,86,7);
//krsort($fruits);
print_r($fruits);
sort($numbers,SORT_STRING);
print_r($numbers);
$random = array("apple","Appale","banana","Banana","pinapple");
sort($random,SORT_STRING | SORT_FLAG_CASE);
print_r($random);
//for ($i=0;$i<count($numbers);$i++){
  //  echo $numbers[$i]."\n";
//}
//foreach($numbers as $number){
  //  echo $number."\n";
//}