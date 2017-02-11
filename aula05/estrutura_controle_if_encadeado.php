<?php
$salario = 1020; // R$
$tempoServico = 9; // meses
$temReclamacoes = false; // boleano
if ($salario > 1000)
{
	if ($tempoServico >= 12)
	{
		if ($temReclamacoes != true)
		{
			echo 'parabéns, você foi promovido1';
		}
	}
}

if (($salario > 1000) and ($tempoServico >= 12) and ($temReclamacoes != true)) {
	echo 'parabéns, você foi promovido2';
}

?>