<?php
$numbers1 = array(1,3,4,2,6,588,44,33,45);
$numbers2 = array(11,32,3,56,45,95,86,7);

$fruits1 = array('a'=> 'apple','b'=>'orange','f'=>'jackfruit','g'=>'banana','s'=>'dates','L'=>'mango');
$fruits2 = array('d'=> 'zzzzz','b'=>'orange','e'=>'mmmmmm','h'=>'kkkkk','p'=>'lll','o'=>'ppp');

$common = array_intersect($numbers1,$numbers2);
print_r($common);

$common = array_intersect($fruits1,$fruits2);
print_r($common);
$difff = array_diff($numbers2,$numbers1);
print_r($difff);