<?php

class Aplicacao

{

	/*metodo estatico
	 * le o arquivo readme.txt
	 */

	static function Sobre()
	{

		$fd = fopen('readme.txt','r');
		while ($linha = fgets($fd,200))
		{
			echo $linha;
		}
	}
}

echo "Informacoes sobre a aplicacao \n";
echo "==================================== \n";
Aplicacao::Sobre();

?>
