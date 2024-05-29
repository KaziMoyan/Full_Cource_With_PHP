<?php
$very=0;
$old =1;
$new= 1;
for($i = 0;$i<10;$i++){
    echo $very." ";
    $old =$new;
    $new =$old +$very;
    $very = $old;
}