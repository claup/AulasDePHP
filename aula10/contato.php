<?php

class Contato
	
{
		var$nome;
		var$telefone;
		var$email;
	
	//grava informacoes de contato
	function SetContato($nome,$telefone,$email)
	{
		$this->nome=$nome;
		$this->telefone=$telefone;
		$this->email=$email;
	}
	
	//obtem informacoes de contato
	function GetContato()
	{
		return "Nome: {$this->nome}, Telefone: {$this->telefone}, Email: {$this->email};
	}
	
}

?>
