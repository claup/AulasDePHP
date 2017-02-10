<?php

/*aritmético + array + string. Além do operador básico de atribuição, 
há "operadores combinados" para todos os operadores aritméticos, de array e string 
que permitem a você pegar um valor de uma expressão e então usar seu próprio valor para o 
resultado daquela expressão.*/

// Aritméticos:

$a = $b = 1;
echo $a += $b; echo"\n";	// 1 + 1 = 2

$a = $b = 1;
echo $a *= $b; echo"\n";	// 1 * 1 = 1

$a = $b = 1;
echo $a /= $b; echo"\n";

$a = $b = 1;
echo $a -= $b; echo"\n";

$a = $b = 1; 
echo $a %= $b; echo"\n";

$a = $b = 1;
echo $a **= $b; echo"\n";


// String:

$c = 'Olá';
$d = ' ';
$e = 'turma';

echo $c .= $d;
echo $c .= $e;

// Array:

$f = array('Brasil', 'Campeão');
$g = array('Copa do Mundo');
$f += $g;

print_r ($f);




?>
