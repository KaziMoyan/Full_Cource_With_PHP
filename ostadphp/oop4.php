<?php
class RGB {
   private $color;
   private $red;
   private $green;
   private $blue;
   
   function __construct($colorCode='')
   {
    $this ->color =ltrim($colorCode,'');
    $this ->parseColor();
   }
   function getColor(){
    return $this-> $color;
   }

   public function setColor($colorCode)
   {
    $this->color = ltrim($colorCode,"#");
    $this -> parseColor();
   }
   private function parseColor(){
    if($this -> color){
        list($this->red,$this->green,$this->blue)= sscanf($this->color,'%02x%02x%02x');
        print_r($colors);
     }
   }
}
$myColor = new RGB("#ffef27");
