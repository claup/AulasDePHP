<?php
//inclui classe produto
include_once 'produto.php';

//criando novo produto com o preco R$ 345.67
$produto = new Produto(1, 'Pendrive 512Mb',1, 345.67);

//executando metodo Vender, passando 10 unidades
//..............