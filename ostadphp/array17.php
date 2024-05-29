<?php

$name = "Moyeen";
$string1 = "My name is $name";
echo $string1;
$heredoc = <<< 'EOD'
data 1
new line
more text 
EOD;
echo $heredoc;