<?php
$marcas = array ();
$marcas [] = 'GM';  		// posição 0 - ordenativo
$marcas [] = 'Fiat';		// posição 1 - ordenativo
$marcas ['Audi'] = 'A4';	// posição Audi - associativo
$marcas [3] = 'VW';			
$marcas [] = 'Renault';
$marcas [2] = 'Dodge';
$marcas [] = 'Jac';


print_r($marcas);

?>
