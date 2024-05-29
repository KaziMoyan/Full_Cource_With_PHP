<?php
class Human{
public $name;
public $age;
 
function __construct($personName,$personAge =0){
    echo "New Human Object \n";
    $this -> name = $personName;
    $this -> age = $personAge;
}
function sayHi(){
        echo "Moyeen";    
        echo "\n";
        $this->sayName();
    }

function sayName(){
        echo "My name is {$this->name} I am {$this ->age} years old \n ";
    }
}
$h1 = new Human("kazi",18);

$h1 -> sayHi();