<?php
class Shape{

}
class Shapes{
    private $shapes;
    function __construct(){
        $this-> shapes =array();
    }
    function addShape($shape){
        array_push($this->shapes,$shape);
    }
    function totalShapes(){
        return count($this->shapes);
    }

}
class Rectangle extends Shape{

}
class Triangle extends Shape{

}
class Student{

}

$s = new Shapes();
$s -> addShape(new Rectangle());
$s -> addShape(new Triangle());
//$s -> addShape(new Student());

echo $s->totalShapes();