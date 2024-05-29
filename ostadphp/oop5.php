<?php
class ParentClass{
    protected $name;
    function __construct($name){
        $this ->name = $name;
        $this ->sayHi(); 
    
    }
    function sayHi(){
        echo "hi{$this->name}\n";
    }
}
class ChildClass extends ParentClass{
    function sayHi(){
        parent::sayHi();
        echo "Hello";
    }


}
/*

class Child extends ParentClass{
    function sayhi(){
        echo "Helo";
    }
}
*/


$cc = new ChildClass("ABCD");

//$c = new Child("ABC");