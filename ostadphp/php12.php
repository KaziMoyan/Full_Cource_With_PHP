<?php 
$n = 12;
if($n%2==0){
    echo"even number";
}
else{
    echo"Odd Number";
}
if($n%2==0):
    echo "even number";
    echo "\n";
    echo PHP_EQL;
    echo "Some Text";
else:
    echo "odd number";
    echo "\n";
    echo PHP_EQL;
    echo "Some Text++";
endif;