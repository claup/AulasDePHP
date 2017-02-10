<?php
$a = array("a" => "maçã", "b" => "banana");
$b = array("a" =>"pera", "b" => "framboesa", "c" => "morango");

$c = $a + $b; 	// União de $a e $b
var_dump($c);

$c = $b == $a; 	// Igualdade TRUE se $a e $b tem os mesmos pares de chave/valor.
var_dump($c);

$c = $a === $b; // Identidade TRUE se $a e $b tem os mesmos pares de chave/valor na mesma ordem e do mesmo tipo.		
var_dump($c);

$c = $a <> $b; //Desigualdade TRUE se $a não é igual a $b.
var_dump($c);

$c = $a != $b; // Desigualdade TRUE se $a não é igual a $b.
var_dump($c);

$c = $a !== $b; // Não identidade TRUE se $a não é idêntico a $b.
var_dump($c);

?>