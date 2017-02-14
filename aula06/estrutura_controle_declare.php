<?php
/*
 A instrução declare é usada para definir diretivas de execução para um bloco de código.
 A sintaxe do declare é similar à sintaxe de outros construtos de controle de fluxo.
 A seção directive permite que o comportamento do bloco do declare seja definido.
 Atualmente três diretivas são reconhecidas: a diretiva tick, a diretiva encoding e a diretiva strict_types.
 Um 'tick' é um evento que ocorre a cada N declarações de baixo nível executadas pelo interpretador
 dentro do bloco declare. O valor de N é especificado usando ticks=N dentro do bloco declare da seção
 directive.
 */

declare ( ticks = 5 );
register_tick_function ('j_tick');

echo '1'; echo '2';
echo '3';
echo '4';
echo '5';
echo '6';
echo '7';
echo '8';
echo '9';
echo '10';
echo '11';


function j_tick() {
	echo 'j';
}
?>