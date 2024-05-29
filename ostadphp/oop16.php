<?php
class DistrictCollection implements Iter{
    private $districts;

    function __construct(){
        $this->districts= array();
    }
    function add($district){
        array_push($this->districts,$district);
    }
    function getDistricts(){
        return new ArrayIterrator($this->districts);
    }
    function getIterator(){
        return new ArrayIterator($this->districts);
    }
}
$districts = new DistrictCollection;
$districts->add("Raj");
$districts->add("dhaka");
$districts->add("Bari");

//$_districts = $districts->getDistricts();
foreach($_districts as $_districts){
    echo $_districts."\n";
}