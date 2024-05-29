<?php
$fruits = array('apple',' banna','orange','pulm','mango');

$random = array("a"=>12, "b"=> 14,"c"=>34, "D"=> 39,"E"=>77);


$newFruits1 = array_slice($fruits,0,3);
$newFruits2 = array_slice($fruits,3);

//$someFruits1 = array_splice($fruits,-4,1,$newFruits);
$newFruits =array_merge($newFruits1,$newFruits2);


print_r($newFruits1);
print_r($someFruits2);
print_r($newFruits);
$newFruitsplus = $newFruits1 +$newFruits2;
print_r($newFruitsplus);