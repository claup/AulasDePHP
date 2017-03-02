<?php


//declarar a Standard Class (nao obrigatorio, mas aconselhavel)
$william=new stdClass();
$rafaela=new stdClass();

//cria objeto william
$william->nome = 'William Santos';
$william->idade = 20;
$william->profissao = 'Programador';

//cria objeto rafaela
$rafaela->nome = 'Rafaela Santos';
$rafaela->idade = 24;
$rafaela->profissao = 'Policial Militar';

print_r($william);
print_r($rafaela);

?>