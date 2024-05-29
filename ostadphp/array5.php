<?php
$name= "moyeen";
if (isset($name)){
    echo "name is se";
}else{
    echo"not set";
}
echo "\n";

if (empty($name)){
    echo "name is se";
}else{
    echo"not set";
}

echo "\n";

if(isset($name) && (is_numeric($name)|| $name != '')){
    echo " name is not empty set ";
}else{
    echo " Nami is eaither not in set or empty ";
}