<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "usuarios";
	
	//Criar a conexao
	$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

    $id = $_GET['id_cliente'];
    $result_usuario = "SELECT * FROM clientes WHERE id_cliente='$id'";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);
    $linha = mysqli_fetch_assoc($resultado_usuario);
?>
