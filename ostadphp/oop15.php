<?php
class Student{
    private $name;
    Private $age;
    private $class;
    function __construct($name='',$age='',$class=''){
        $this->name = $name;
        $this ->age = $age;
        $this->class = $class;

    }
    public function __get($prop){
        return $this->$prop;
    }
    public function __set($prop,$value){
        $this->$prop = strtoupper($value);
    }

}
    /*
    function getName(){
        return $this-> name;
    }
    function setName($name){
        $this->name= $name;
    }
    function getAge(){
        return $this->age;
    }
    function setAge($age){
        $this->age=$Age;
    }

    function getClass(){
        return $this->class;
    }
    function setClass($class){
        $this->class=$class;
    }
}
*/
$R = new Student ('Rahim','16','10');
//$R-> setName('Rahim');

//echo $R->getAge();

echo $R->name;