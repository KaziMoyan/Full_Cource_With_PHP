<?php
class Human{
    public $name;
    function sayHi(){
        echo "Moyeen";    
        echo "\n";

    }
    function getName(){
        echo "My name is {$this->name}";

    }
}
class Cat{
    function sayHi(){
        echo "Meo";
        echo "\n";
    }
}
class Dog{
    function sayHi(){
        echo "Geu";
    }
}

$h1 = new Human();
$h2 = new Human();
$h1->name = "Rubel";//set 
$h2->name = "Hasin";
$c1 = new Cat();
$d1 = new Dog();

$h1 -> sayHi();
$h2 -> sayHi();
$h2->name ;
echo $h1->name;//get
$c1 -> sayHi();
$d1 -> sayHi();