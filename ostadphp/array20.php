<?php
$string = "Hello world,world how are you";
$parts = explode("",$string);
print_r($parts);
echo PHP_EOL;
$original = join("",$parts);
echo $original;
