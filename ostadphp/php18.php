<?php
#include_once "function.php";
function isEven($n){
    if($n%2==0){
        return true;
    }
        return false;
     
}
function factorial(int $n){
    if(gettype($n)!="integer"){
        return "invalid";
    }
    $result= 1;
    for($i=$n;$i>1;$i--){
        $result *= $i;
    }
    return $result;
}
function serve($foodType,$numberOfItems){
    echo "{$numberOfItems} of {$foodType} has been served";
}

//$x=12;
//if(isEven($x)){
    //echo"{$x} is an eveb number";
//}else{
   // echo"{$x}is an odd number";

//}

/**$x= "7";
echo "factorial of {$x} is  ".factorial($x);
**/
$ft = "Coffee";
$n = "2 cups";
serve($ft,$n);

?>