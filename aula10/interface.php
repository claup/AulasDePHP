<?php

//inclui a interface IAluno
include_once 'ialuno.php';

//classe Aluno implementa interface aluno
class Aluno implements IAluno
{
	//atribui o nome do aluno
	function SetNome($nome)
	{
		$this->nome = $nome;
	}

	//retorna o nome do aluno
	function GetNome()
	{
		return $this->nome;
	}
}

//instancia novo Aluno
$aluno = new Aluno;

//chama métodos quaisquer
$aluno->SetNome('Joana');
echo $aluno->GetNome();


?>