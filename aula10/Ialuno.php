<?php

//criar a interface aluno
interface IAluno
{
//
	function GetNome();
	function SetNome($nome);
	function SetResponsavel(Pessoa $responsavel);
}
?>
