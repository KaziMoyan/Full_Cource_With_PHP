<?php
function sum (int $x ,int $y,int $z):int{
    return $x+$y+$z;
}
echo sum(6,5,6);
 echo "\n";

function summ($x,$y ,int ... $numbers): int{
    $result = 0;
    for($i=0;$i<count($numbers);$i++){
        $result += $numbers[$i];

    }
    return $result;
}
echo sum (5,6,7,8);