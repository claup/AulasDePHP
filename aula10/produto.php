<?php

class Produto
{
	// propriedades [caracteristicas]
	var $codigo;
	var $descricao;
	var $quantidade;
	private $preco;
	const MARGEM = 10;


	//método construtor de um produto

	function __construct($codigo, $descricao, $quantidade, $preco) 
	
	{
		$this->codigo = $codigo;
		$this->descricao = $descricao;
		$this->quantidade = $quantidade;
		$this->preco = $preco;

	}

	//intercepta a obtenção de propriedades
	function __get($propriedade)
	{
		echo "Obtendo o valor de '$propriedade' :\n";
		if ($propriedade == 'preco')
		{
			return $this->$propriedade * (1 + (self::MARGEM / 100));
		}
	}
	
	//intercepta a chamada a metodos
	function __call($metodo, $parametros)
	
	{
		echo "Voce executou o metodo:{$metodo}\n";
		foreach ($parametros as $key=> $parametro)
		{
			echo "\tParametro $key:$parametro\n";
		}
	}
	
	
	//métodos [funcoes]
	function imprimeEtiqueta()
	{
		print 'codigo: ' . $this->codigo . "\n";
		print 'descricao: ' . $this->descricao . "\n";
	}
	
}

?>


