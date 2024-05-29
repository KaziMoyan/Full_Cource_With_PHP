<?php
$numbers = array(1,2,3,4,5,6);
function sum($oldValue,$newValue){
    if($newValue%2==0){
    return $oldValue + $newValue;
    }
    return $oldValue;
}
$sum = array_reduce($numbers,'sum');
echo $sum;
sum (0,1);

$color = array(122,233,65);
//$red = $color[0];
list($red,$green,$blue)= $color;
echo $red;