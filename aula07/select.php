<?php 
//Abrir Conexão
$link = mysqli_connect('127.0.0.1','root','');
$conexao = mysqli_select_db($link, 'maestro');

//Faz o Uso do Banco de Dados
	//Buscar dados para exibir
$sql = 'select * from usuarios';
$resultado = mysqli_query($link, $sql);
?>
<table>
	<tr>
		<td>id_usuario</td>
		<td>nome</td>
		<td>usuario</td>
		<td>senha</td>
	</tr>
	<?php while ($row=mysqli_fetch_assoc($resultado)){ ?>
	<tr>
		<td><?php echo $row['id_usuario'];?></td>
		<td><?php echo $row['nome'];?></td>
		<td><?php echo $row['usuario'];?></td>
		<td><?php echo $row['senha'];?></td>
	</tr>
	<?php } ?>
</table>











<?php

$link = mysqli_connect('127.0.0.1','root','');
$conexao = mysqli_select_db($link, 'maestro');
$sql = 'select * from usuarios';
$resultado = mysqli_query($link, $sql);
print_r($resultado);

//assoc = array associativo (padrao); array = array ordenativo; object

	while ($row=mysqli_fetch_assoc($resultado)){
	print_r($row); 
	} 

mysqli_close($link);

?>


