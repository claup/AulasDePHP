<?php
class Fornecedor

{
	var$codigo;
	var$razaoSocial;
	var$endereco;
	var$cidade;
	var$contato;
	
		//metodo construtor
		function __construct()
		{
		
		//instancia novo contato
		$this->contato = new Contato;
			
		//grava contato
		function SetContato($nome,$telefone,$email)
		{
			//delega chamada de metodo
			$this->Contato->SetContato($nome,$telefone,$email);
		}
			
		//retorna contato
		function GetContato()
		{
			
			//delega chamada de metodo
			$this->Contato->GetContato();
		}
	
}
}

?>
