<?php

include_once 'fornecedor.php';
include_once 'contato.php';

//instancia novo fornecedor

$fornecedor = new Fornecedor;
$fornecedor->razaoSocial = 'Produtos S.A.';

//atribui informacoes de contato

$fornecedor->SetContato('Vendedor','51 1234-5678','vendedor@produtos.com.br');

//imprime informacoes

echo $fornecedor->razaoSocial . "\n";
echo 'Informações de contato';
echo $fornecedor->GetContato();


?>
