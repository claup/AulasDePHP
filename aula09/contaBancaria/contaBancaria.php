<?php
class ContaBancaria
{
	var $agencia;
	var $codigo;
	var $dataDeCriacao;
	var $titular;
	var $senha;
	var $saldo = 0;
	
	/***
	 * metodo retirar
	 * diminui o saldo em $quantia
	 */
	function retirar($quantia)
	{
		if ($quantia > 0)
		{
			$this->saldo -= $quantia;
		}
	}
	
	/***
	 * metodo depositar
	 * aumenta o saldo em $quantia
	 */
	function depositar($quantia)
	{
		if ($quantia > 0)
		{
			$this->saldo += $quantia;
		}
	}
	
	/***
	 * metodo obterSaldo
	 * retorna o saldo atual
	 */
	function obterSaldo()
	{
		return $this->saldo;
	}
	
	/***
	 * método construtor
	 * inicializa propriedades
	 */
	function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo)
	{
		$this->agencia = $agencia;
		$this->codigo = $codigo;
		$this->dataDeCriacao = $dataDeCriacao;
		$this->titular = $titular;
		$this->senha = $senha;
		// chamada a outro metodo da classe
		$this->depositar($saldo);
	}
	/***
	 * metodo destrutor
	 * finaliza objeto
	 */
	function __destruct()
	{
		echo "Objeto Conta {$this->codigo} de {$this->titular->nome} finalizada...\n";
	}
	
}
?>
