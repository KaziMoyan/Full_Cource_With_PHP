<?php
class A{
    public static $name;
    static function sayHi(){
        self::$name = "Hello";
        echo "Hi from\n";
    }
}
class B extends A{
    static function sayHi(){
        echo parent:: $name;
        echo "Hi From B\n";
        parent::sayHi();
    }
}
B :: sayHi();
// A:: sayHi(); 
echo B::$name;