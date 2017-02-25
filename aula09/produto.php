<?php

class Produto
{
	// propriedades [caracteristicas]
	var $codigo;
	var $descricao;
	var $preco;
	var $quantidade;
	
	//métodos [funcoes]	
	function imprimeEtiqueta()
	{
		print 'codigo: ' . $this->codigo . "\n";
		print 'descricao: ' . $this->descricao . "\n";
	}
}
?>


