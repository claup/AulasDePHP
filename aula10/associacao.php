<?php

include_once 'contato.php';
include_once 'fornecedor.php';
include_once 'produto.php';

//instancia fornecedor
$fornecedor = new Fornecedor;
$fornecedor->codigo = 111;
$fornecedor->razaoSocial = 'Alimentos S.A.';
$fornecedor->endereco = 'Rua Julio de Castilhos';
$fornecedor->cidade = 'Caxias do Sul';

//instancia produto
$produto = new Fornecedor;
$produto->codigo = 111;
$produto->descricao = 'Doce de Uva';
$produto->preco = '30.55';
$produto->fornecedor = $fornecedor;

//imprime atributos
echo 'Codigo		:'.$produto->codigo. "\n";
echo 'Descricao		:'.$produto->descricao. "\n";
echo 'Codigo		:'.$produto->fornecedor->codigo. "\n";
echo 'Razao Social	:'.$produto->fornecedor->razaoSocial. "\n";

?>