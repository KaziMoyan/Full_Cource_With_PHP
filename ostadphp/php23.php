<?php
function fibonacchi($old,$new,$start,$end){
    static $start;
    $start = $start ?? 0;
    if($start>$end){
        return;
    }
    $start++;
    echo $old." ";
    $_temp = $old+ $new;
    $old = $new;
    $new = $_temp;
    fibonacchi($old,$new,$start,$end);
    
}
fibonacchi(0,1,5,77);