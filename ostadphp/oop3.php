<?php
class Found{
    private $fund;

function __construct($initialFund = 0){
    $this->fund = $initialFund;
}
public function addFund($money){
    $this -> fund += $money;
}
private function deductFund($money){
    $this ->fund -= $money;
}
 public function getTotal(){
    echo "Total fund is {$this -> fund}\n";
 }
}
$ourFund = new Found(100);
//ourFund->fund= 75;
$ourFund -> addFund(10);
//$ourFund ->deductFund(6);
$ourFund -> getTotal();