<?php
/* print_r imprime o conteúdo de uma variável de forma explanativa, assim como o var_dump,
 * MAS em formato mais legível para o programador, com os conteúdos alinhados e suprimindo 
 * os tipos de dados.
 *  
 */

print_r('olá mundo');
print_r("olá mundo");
print_r("olá \n mundo");
$planeta='Terra';
print_r($planeta);
echo"\n";
$planetas=array('Terra','Marte','Saturno');
print_r($planetas);
