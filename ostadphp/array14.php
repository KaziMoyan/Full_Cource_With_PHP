<?php
$numbers= range(12,20,3);
print_r($numbers);
foreach(range(12,20,2)as $evenNumber){
    if($evenNumber > 0){

    
    echo $evenNumber."\n";
}
}
