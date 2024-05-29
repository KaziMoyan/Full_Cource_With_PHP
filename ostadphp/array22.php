<?php
$string = "Quick Browm Fox for jumber over the lazy dog ";
$replacedString = str_ireplace(array('Brown','fox'),array('red','cat'),$string,$count);
echo $replacedString;
echo PHP_EOL;
echo $string;
echo PHP_EOL;
echo "Total Replacement:{$count}";