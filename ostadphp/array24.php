<?php
$name = "Moyeen kazi 012345432";
$parts = sscanf($name, "%s %s %11s");
print_r($parts);