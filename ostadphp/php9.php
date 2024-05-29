<?php
$n = 10;
if(12== $n){
 echo "Twelve";
}else if (10 == $n){
    echo "Ten";
}else{
    echo " A Number";
}
echo "\n";
$numberInWord = (12 == $n ) ? "Twelve" : ( 10 == $n)? "Ten" : " A number ";
echo $numberInWord;
echo "\n";
if ($n % 2 == 0){
    echo "Even Numbr";
}else{
    echo "odd number";
    
}
echo "\n";