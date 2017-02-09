<?php
class Caneta {
	var $cor;
	var $material;
	var $tamanho;
	function riscar() 

	{
		echo 'Riscando';
	}
}

$obj = new Caneta ();
$obj->cor = "azul";
$obj->material = "plastico";
$obj->tamanho = "13cm";
$obj->riscar ();

print_r ( $obj );

$obj2 = new Caneta ();
$obj2->cor = "vermelho";
$obj2->material = "plastico";
$obj2->tamanho = "13cm";
$obj2->riscar ();

print_r ( $obj2 );

?>
