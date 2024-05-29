<?php
/*

$name = "Earth";
function doSomething(){
    global $name;
    echo $name;
    echo $GLOBALS['name'];
}
*/
function doSomething(){
    #global $name;
    #$name = "Earth";
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n"; 

}
function  doExtra(){
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}
doSomething();
doSomething();
doSomething();
doExtra();
doExtra();
$name;


