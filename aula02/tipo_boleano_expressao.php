<?php
// declara variável numérica
$umidade = 91;

// testa se é maior que 90. Retorna um boolean
$vaiChover = ($umidade > 90);

// testa se $vaiChover é verdadeiro
if ($vaiChover) {
	echo 'Está chovendo';
} else {
	echo 'O tempo permanecerá seco';
}
?>