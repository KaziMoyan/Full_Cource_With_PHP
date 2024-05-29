<?php
 $students = [
    'k' => 'Mk,nn,kk,ii,pp,oo,tt',
    'D' => 'Mk,nn,kk,ii,pp,oo,tt',
    'p' => 'Mk,nn,kk,ii,pp,oo,tt'
 ];

// $students['drinks'] = $students['drinks'].",orangejuice ";
 $students['drinks'] .=",orange huis";
 //echo $students['k'];
 
 foreach ($students as $key => $value){
 echo $key."=" .$value."\n";

 }
 $keys = array_keys($students);
 for($i = 0; $i<count($keys);$i++){
    $key = $keys[$i];
    echo $students[$keys]."\n";
 }
 $values= array_values($students);
 for($i=0; $i<count($value);$i++){
    $value = $values[$i];
    echo $value. "\n";
 }