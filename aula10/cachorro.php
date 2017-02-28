<?php

class Cachorro

{
	private $nascimento;
	
	//metodo construtor
	function __construct($nome)
	{

		$this->nome = $nome;
	}
			
		//intercepta atribuicao
		function __set($propriedade,$valor)
		{
			if($propriedade == 'nascimento')
			{			

			//verifica se valor e dividido em 3 partes separadas por '/'
			if(count(explode('/','$valor'))==3)
			{
				echo "Dado '$valor', atribuido a '$propriedade'\n";
				$this->$propriedade = $valor;
			}
			else 
			{
				echo "Dado '$valor', nao atribuido a '$propriedade'\n";
			}
		}
		else 
		{
			$this->$propriedade = $valor;
				
		}
	}
}

?>
