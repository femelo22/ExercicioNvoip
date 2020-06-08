<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "usuarios";
	
	//Criar a conexao
	$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

	 $query = "SELECT * FROM clientes;";
	 $consulta = mysqli_query($conexao, $query);
?>