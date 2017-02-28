<?php

//inclui classe cachorro
include_once 'cachorro.php';

$toto = new Cachorro('Toto');

$toto -> nascimento = '3 de marco';	//atribuicao invalida
$toto -> nascimento = '10/04/2005';	//atribuicao correta

?>
