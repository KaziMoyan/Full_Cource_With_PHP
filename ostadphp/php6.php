<?php
$n = 12;
if($n % 2 == 0){
    echo "$n is even number ";

}
else{
    echo" $n is an odd number";
}
echo "\n";
if($n>10 ){
    echo "$n is gater than 10 ";
}

$age =14;
if($age>= 13 && $age<= 19){
    echo "This persion is young ";
}
else{
echo "This person is not young";
}
$food = "tuna";
if("tuna" == $food || "salmon" == $food ){
    echo " Its has vitamin D";
}elseif("apple"==$food){
    echo"we don't know it has vitamine D or anything";
} else{
    echo "We dont know if {$food}";
}
?>