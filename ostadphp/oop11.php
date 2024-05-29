<?php
interface BaseAnimal{
function isAlive();
function canEar($parnm1,$param2);
function breed();

}
class Animal implements BaseAnimal{
    function isAlive(){}
    function canEat($parnm1,$param2){}
    function breed(){}
}
 interface BaseHuman extends BaseAnimal{
    function canTalk();
 }
 class Human implements BaseHuman{
    function isAlive()
    {}
    function canEat($parnm1,$param2)
    {}
    function breed()
    {}
    function canTalk()
    {}
 }
 $cat = new Animal();
 echo $cat instanceof Human;
 $h = new Human();
 echo $h instanceof Animal;
