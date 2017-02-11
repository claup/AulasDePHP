<?php

/*
$a = 5;
$b = 4;

if (($a * $a) > ($b + $a))
echo "a is bigger than b";  // verdadeiro, imprime 
	
if (($a - $b) > ($b * $a))
echo "a is bigger than b";  // falso, não imprime

*/


$a = true;
$b = true;

if ($a){
	echo '1';
}

if (!$a){
	echo '2';
}
	
if ($a + $b){
	echo '3';
}
	
if ($a or true){
	echo '4';
}



?>
	