<?php

class ContaPoupanca extends ContaBancaria
{
var $aniversario;
/***
 * metodo construtor (sobrescrito)
 * agora, tambem inicializa a variavel $aniversario
 */

public function __construct($agencia,$codigo,$dataDeCriacao,$titular,$senha,$saldo,$aniversario)
	{
	// chamada do metodo construtor da classe-pai.
	parent:: __construct($agencia,$codigo,$dataDeCriacao,$titular,$senha,$saldo);
	$this->aniversario = $aniversario;
	}

/***
 * metodo retirar (sobrescrito)
 * verifica se ha saldo para retirar tal $quantia.
 */
function retirar($quantia)
{
if ($this->saldo >= $quantia)
{
// Executa metodo da classe-pai.
parent::retirar($quantia);
// retirada permitida
return true;
}
else
{
echo "Retirada nao permitida...\n";
return false;
}
}
}
?>
