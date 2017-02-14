<?php

/* O continue aceita um argumento numérico opcional que diz quantos níveis de laços aninhados deve pular. 
O valor padrão é 1, saltando para o final do laço atual.*/


$i = 0;
while ($i++ < 5) {
	echo "Outer<br />\n";
	while (1) {
		echo "Middle<br />\n";
		while (1) {
			echo "Inner<br />\n";
			continue 3;
		}
		echo "This never gets output.<br />\n";
	}
	echo "Neither does this.<br />\n";
}

?>