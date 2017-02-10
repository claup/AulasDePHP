<?php

$imovel[]='casa';
$imovel[]='apto';

$resultado[]=($imovel[0] == $imovel[1]);  	// igual - compara valor
$resultado[]=($imovel[0] === $imovel[1]);   // idêntico - compara valor e tipo de dado
$resultado[]=($imovel[0] != $imovel[1]);	// diferente (idêntico ao abaixo)
$resultado[]=($imovel[0] <> $imovel[1]);	// diferente (idêntico ao acima)
$resultado[]=($imovel[0] !== $imovel[1]);	//não idêntico - verdadeiro se $a não é igual a $b, ou se não são do mesmo tipo
$resultado[]=($imovel[0] < $imovel[1]);		//menor que	Verdadeiro se $a é estritamente menor que $b.*
$resultado[]=($imovel[0] > $imovel[1]);		//maior que	Verdadeiro se $a é estritamente menor que $b.*
$resultado[]=($imovel[0] <= $imovel[1]);	//menor ou igual Verdadeiro se $a é menor ou igual a $b.
$resultado[]=($imovel[0] >= $imovel[1]);	//maior ou igual Verdadeiro se $a é menor ou igual a $b.

// * para o < ou > ele conta o valor de cada caracter e soma. ex.: casa (96) é maior que apto (93)
//print_r($resultado); não é o comando mais adequado

//var_dump($resultado);

// operador spaceship (versão 7.0):

$num[]='96';
$num[]='93';
$resultado1[]=($num[0] <=> $num[1]); 		// resultado = 1

$num[]='93';
$num[]='93';
$resultado1[]=($num[2] <=> $num[3]); 		// resultado = 0


$num[]='90';
$num[]='93';
$resultado1[]=($num[4] <=> $num[5]);		// resultado = -1

var_dump($resultado1);					

// operador Null coalescing





?>

