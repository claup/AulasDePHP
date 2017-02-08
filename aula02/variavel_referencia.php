<?php
$a = 5;
$b = &$a;
$b = 10;
echo $a;  // resultado = 10
echo $b;  // resultado = 10
?>
