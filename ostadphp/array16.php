<?php
$fruits = array('a'=>'kkkk','b'=>'banna' ,'c'=> 'cherry','d'=>'Dates');
//shuffle($fruits);
$_fruits = $fruits;
shuffle($_fruits);
$key = array_rand($fruits);
echo $key;
print_r($fruits);