<?php
$numbers = array(1,2,3,4,5,6,7,8,9);
function square($n){
    printf("Square of %d is %d \n", $n, $n*$n);

}
function cube($n){
    return $n*$n*$n;
}
$newArray = array_map('cube',$numbers);

array_walk($numbers,'square');
print_r($newArray);