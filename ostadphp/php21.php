<?php
function printN($i){
   
    if($i>=10){
        return;
    }
    echo $i."\n";
    $i++;
    printN($i);
}
printN(1);
function printNumber($counter,$end,$stepping=1){
    if($counter>$end){
        return;
    }
    echo $counter."\n";
    $counter++;
    printNumber($counter,$end);
}
printNumber(21,37,3);