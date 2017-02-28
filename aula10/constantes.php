<?php

class Biblioteca
{
const Nome = 'Sistema';
}

class Aplicacao extends Biblioteca
{
	//declaracao das constantes
	const Ambiente = "Maestro";
	const Versao = "1.0.0.1";
	
	/*metodo construtor
	 * acessa as constantes internamente
	 */
	
	function __construct($Nome)
	{
		echo parent::Nome . self::Ambiente . self::Versao . $Nome . "\n";
		
	}
}

//acessa as constantes externamente
new Aplicacao('2016');
new Aplicacao('2017');

?>
