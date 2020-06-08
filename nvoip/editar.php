<?php

    include_once 'conexao_editar.php';

    $id = $_POST['id_cliente'];

    $nomeCliente = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $pais = $_POST['pais'];
    $tel = $_POST['telefone'];   
	
    $result_usuario = "UPDATE clientes SET nome = '$nomeCliente', sobrenome = '$sobrenome', email = '$email', cpf = '$cpf', cep = '$cep', endereco = '$endereco', bairro = '$bairro', cidade = '$cidade', estado = '$estado', pais = '$pais', telefone = '$tel' WHERE id_cliente = '$id'";
    
	$resultado_usuario = mysqli_query($conexao, $result_usuario);
	
	header("Location: index.php?pagina=painel");
?>