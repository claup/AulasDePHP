<?php
$a = array("a" => "ma��", "b" => "banana");
$b = array("a" =>"pera", "b" => "framboesa", "c" => "morango");

$c = $a + $b; 	// Uni�o de $a e $b
var_dump($c);

$c = $b == $a; 	// Igualdade TRUE se $a e $b tem os mesmos pares de chave/valor.
var_dump($c);

$c = $a === $b; // Identidade TRUE se $a e $b tem os mesmos pares de chave/valor na mesma ordem e do mesmo tipo.		
var_dump($c);

$c = $a <> $b; //Desigualdade TRUE se $a n�o � igual a $b.
var_dump($c);

$c = $a != $b; // Desigualdade TRUE se $a n�o � igual a $b.
var_dump($c);

$c = $a !== $b; // N�o identidade TRUE se $a n�o � id�ntico a $b.
var_dump($c);

?>