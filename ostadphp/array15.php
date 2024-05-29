<?php
$numbers = range (40,80);
//print_r($numbers);
$random = mt_rand(0,32);
//echo $random;
$luck = $numbers[$random];
if($luck%2==0){
    echo "head";
}else{
    echo"tao";
}
shuffle($numbers);
print_r($numbers);