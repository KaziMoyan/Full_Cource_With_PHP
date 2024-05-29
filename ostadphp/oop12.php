<?php
class MathCalculator{
    private $number;
    static $name;
    static function fibonacci($n){
        self::doSomething();
        echo "Fibonacci searies up to {$n}\n";

    }
    static function doSomething(){
        echo "Doning something \n";
    }
    function factorial($n){
        self::$name="ABCD";
        self::doSomething();
        $this->doSomething();
        $this->number = 12;
        echo "Calculate factorial of {$n}";

    }
}
$mathc = new  MathCalculator();
$mathc-> fibonacci(8);
MathCalculator :: fibonacci(7);
echo MathCalculator::$name;