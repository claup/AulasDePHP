<?php

class Aplicacao

{
	
static $quantidade;

	/*metodo construtor
	 * incrementa a quantidade de Aplicacoes
	 */
	
	function __construct($nome)
	{
		
		//incrementa propriedade estatica
		
		self::$quantidade ++;
		$i = self::$quantidade;
		echo "Nova Aplicacao nr. $i.$nome\n";
		
	}
}

#cria novos objetos
new Aplicacao('Basico');
new Aplicacao('Profissional');
new Aplicacao('Negocios');

echo 'Quantidade de Aplicacoes = '.Aplicacao::$quantidade."\n";


?>
