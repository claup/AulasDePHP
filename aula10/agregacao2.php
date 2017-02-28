<?php

include_once 'cesta.php';
include_once 'fornecedor.php';
include_once 'produto.php';


$fornecedor = new Fornecedor;
$fornecedor->RazaoSocial = 'Produtos S.A.';

$cesta = new Cesta;
$cesta->AdicionaItem($fornecedor);
$cesta->CalculaTotal(), "\n";

?>