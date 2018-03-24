<?php include("../model/error/msgError.php");
	
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'classificadosdb';
	$charset = "utf8";

	//verifica se alguma conexao deu erro!
	if (mysqli_connect_errno()) {
		echo($erroConection . $mysqli->connect_error);
    	exit();
	}
?>﻿