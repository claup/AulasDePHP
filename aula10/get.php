<?php

//inclui classe Produto
include_once 'produto.php';


//cria novo produto com o preco de R$ 345.67
$produto = new Produto(1, 'Pendrive 512Mb', 1, 345.67);

//imprime o preco
echo $produto->preco;

?>
