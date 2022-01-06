

<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "culturela";

	$conexao = mysqli_connect($host, $user, $pass, $database);
	if(!$conexao){
		die("Erro: ".mysqli_connect_error());
	}

?>