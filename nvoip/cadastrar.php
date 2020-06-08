<?php

include_once 'conexao.php';

if(isset($_POST["registrar"]))  
{  
	 $nomeCliente= $_POST['nome'];
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
     

	 $query = "INSERT INTO clientes (nome,sobrenome,email,cpf,cep,endereco,bairro,cidade,estado,pais,telefone)

	 VALUES  ('$nomeCliente','$sobrenome','$email','$cpf','$cep','$endereco','$bairro','$cidade','$estado','$pais','$tel')";  

	 if(mysqli_query($conexao, $query)){  
		  echo '<script>alert("Não foi possível realizar o cadastro!")</script>';  
	 }  
}  
	//fechando conexão
 	mysqli_close($conexao);

	header("Location: index.php?pagina=painel");

	?>
