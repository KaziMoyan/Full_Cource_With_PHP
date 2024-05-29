<?php
$fruits = array('apple',' banna','orange','pulm','mango');

$random = array("a"=>12, "b"=> 14,"c"=>34, "D"=> 39,"E"=>77);
$newFruits= array("jackfruits","tamarid",'kkkk');

$someFruits = array_splice($fruits,-4,1,$newFruits);
print_r($someFruits);
print_r($fruits);