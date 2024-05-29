<?php
$fruits = array('a'=> 'apple','b'=>'orange','f'=>'jackfruit','g'=>'banana','s'=>'dates','L'=>'mango');
$numbers = array(11,32,3,56,45,95,86,7);
if(in_array(56,$numbers,true)){
    echo ' 56 is found';
}
$offset = array_search(56,$numbers);
echo $offset."\n";
if(key_exists('bb',$fruits)){
    echo "key b exist";
}