<?php

// cria array dados_william
$dados_william['nome'] = 'William Santos';
$dados_william['idade'] = 20;
$dados_william['profissao'] = 'Programador';

// cria objeto william
$william = new stdClass();
foreach ($dados_william as $chave => $valor)
{

// utiliza variáveis variantes
$william->$chave = $valor;
}


// cria array dados_rafaela
$dados_rafaela['nome'] = 'Rafaela Santos';
$dados_rafaela['idade'] = 24;
$dados_rafaela['profissao'] = 'Policial Militar';

// cria objeto rafaela
$rafaela = new stdClass();
foreach ($dados_rafaela as $chave => $valor)
{

// utiliza variáveis variantes
$rafaela->$chave = $valor;
}

echo "{$william->nome} é {$william->profissao}\n";
echo "{$rafaela->nome} é {$rafaela->profissao}\n";

?>