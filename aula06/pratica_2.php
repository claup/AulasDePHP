<html>
<head>

</head>

<body>

<a href="pratica_2.php?menu=aluno"> ALUNO </a>
<a href="pratica_2.php?menu=professor"> PROFESSOR </a>

</body>

</html>

<?php
if(isset($_GET['menu'])){
if($_GET['menu']=='aluno'){
	echo 'Aluno';
	}
elseif($_GET['menu']=='professor'){
	echo 'Professor';
	}
}

?>