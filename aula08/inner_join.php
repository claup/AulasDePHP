<?php
//Abrir Conexão
$link = mysqli_connect('localhost','root','','maestro');

$sql = "
		SELECT 
			matricula.id_matricula,
			matricula.id_aluno,
			aluno.nome as nomealuno,
			curso.nome as nomecurso
		FROM matricula
		JOIN aluno ON (matricula.id_aluno = aluno.id_aluno)
		JOIN curso ON (matricula.id_curso = curso.id_curso)
	   ";

$resultado = mysqli_query($link, $sql);
if(mysqli_num_rows($resultado)){
	while($row = mysqli_fetch_assoc($resultado)){
		echo 'CODIGO MATRICULA: '. $row['id_matricula']."</br> \n";
		echo 'NOME ALUNO:'.$row['nomealuno']."</br> \n";
		echo 'NOME CURSO:'.$row['nomecurso']."</br> \n";

		
	}
}
	

/*
$resultado = mysqli_query($link, "select id, id_aluno, id_curso from matricula");
if(mysqli_num_rows($resultado)){
	
	while($row = mysqli_fetch_assoc($resultado)){
		
		echo 'CODIGO MATRICULA: '. $row['id']."</br> \n";
				
		$dados_aluno = mysqli_query($link, "SELECT id, nome,endereco,cpf,email,data_nascimento,responsavel,telefone  FROM aluno WHERE id=".$row['id']);
		if(mysqli_num_rows($dados_aluno)){
			
			$aluno = mysqli_fetch_row($dados_aluno);
			
			echo 'NOME ALUNO:'.$aluno[1]."</br> \n";
			echo 'ENDEREÇO:'.$aluno[2]."</br> \n";
			echo 'CPF:'.$aluno[3]."</br> \n";
			
		}
		
		
		$dados_curso = mysqli_query($link, "SELECT * FROM cursos WHERE id = " . $row['id_curso'] );
		if(mysqli_num_rows($dados_curso)){
			
			$curso = mysqli_fetch_row($dados_curso);
			
			echo 'NOME DO CURSO:'.$curso[1];
		}
		
		
	}
}
*/