<?php
abstract class Ourclass{
   final function doSomething(){
        echo"Doing Something";
    }
}
class MyClass extends OurClass{
  //do not careate same function or ooveride something 
}

$mc = new MyClass();
$mc->doSomething();