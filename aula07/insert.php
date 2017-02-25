<?php 

//Abrir Conexão
$link = mysqli_connect('localhost','root','');
$conexao = mysqli_select_db($link, 'maestro');

//Faz o Uso do Banco de Dados
	//objetivo: inserir uma linha na tabela usuarios
$sql = "insert into usuarios (id_usuario,usuario,nome,senha) values(null,'NOME','nome','1234')";
$resultado = mysqli_query($link, $sql);

//fechar conexão

mysqli_close($link);

?>
