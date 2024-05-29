<?php
define ('ok',123);
const City = "Dhaka";
define ('Ok',123);
echo City;
class myclass{
    const city ="Dgaka";
    function sayHi(){
        echo"hi from".$this::city;
    }

}
$m = new myclass();
echo myclass::city;