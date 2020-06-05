<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css" media="screen">	
		@import url("css/stylePainel.css");
		#fundo {background-image: url("imagens/nvoip2.jpg");}
	</style>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Imports externo do NavBar (menu) Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Imports externo do CSS do datatable bootstrap 4  -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

	<title>Nvooip</title>
</head>

<body id="fundo">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Aqui começa o NavBar -->
	<nav class="navbar navbar-expand-lg navbar-tra bg-dark shadow fixed-top">
		<div class="container">
			<a class="text-white" class="alinhamentoNav" href="index.php?Consulta_de_Clientes">Lista de Clientes</a>
			<a class="text-white" class="alinhamentoNav" href="telaCadastro.php?Cadastro_de_Clientes">Cadastrar Clientes</a>
			<a class="text-danger" class="alinhamentoNav" href="#">Sair</a>
		</div>
	</nav>
	<br><br><br><br>
	<!-- Aqui começa a div para a tabela, puxar o banco de dados para a tabela e etc -->
	<div>
		<table id="discoVinil" class="table table-sm table-dark">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">sobrenome</th>
					<th scope="col">email</th>
					<th scope="col">CPF</th>
					<th scope="col">CEP</th>
					<th scope="col">endereco</th>
					<th scope="col">bairro</th>
					<th scope="col">cidade</th>
					<th scope="col">estado</th>
					<th scope="col">pais</th>
					<th scope="col">telefone</th>
					<th scope="col">Ações</th>
					<th scope="col">Ajustes</th>


				</tr>
			</thead>
			<tbody>
				<?php
				while ($linha = mysqli_fetch_array($consulta)) {
					echo '<tr>'.'<td scope="row" >' . $linha['nome'] . '</td>';
					echo '<td scope="row">' . $linha['sobrenome'] . '</td>';
					echo '<td scope="row">' . $linha['email'] . '</td>';
					echo '<td scope="row">' . $linha['cpf'] . '</td>';
					echo '<td scope="row">' . $linha['cep'] . '</td>';
					echo '<td scope="row">' . $linha['endereco'] . '</td>';
					echo '<td scope="row">' . $linha['bairro'] . '</td>';
					echo '<td scope="row">' . $linha['cidade'] . '</td>';
					echo '<td scope="row">' . $linha['estado'] . '</td>';
					echo '<td scope="row">' . $linha['pais'] . '</td>';
					echo '<td scope="row">' .'<span id="telefone">'. $linha['telefone'] .'</span>'. '</td>';
				?>
					<td scope="row">
						<a href="editar_disco.php?id_vinil=<?php echo $linha['id_vinil']; ?>">
							<button class="btn btn-success" id="sms" onclick="myFunction()">SMS
						
							</button> <br><br>
							<a href="deleta_disco.php?id_vinil=<?php echo $linha['id_vinil']; ?>">
								<button class="btn btn-success">Torpedo de Voz
								
								</button><br><br>
							</a>				
					</td>
					
					<td scope="row">
						<a href="deletarDisco.php?id_cliente=<?php echo $linha['id_cliente']; ?>">
							<button class="btn btn-danger">Deletar
						
							</button> <br><br>
							<a href="deleta_disco.php?id_vinil=<?php echo $linha['id_vinil']; ?>">
								<button class="btn btn-info">Editar
								
								</button><br><br>
							</a>				
					</td>
					</tr>
				<?php
				}
				?>
			</tbody>
			<tfoot class="thead-dark">
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">sobrenome</th>
					<th scope="col">email</th>
					<th scope="col">CPF</th>
					<th scope="col">CEP</th>
					<th scope="col">endereco</th>
					<th scope="col">bairro</th>
					<th scope="col">cidade</th>
					<th scope="col">estado</th>
					<th scope="col">pais</th>
					<th scope="col">telefone</th>
					<th scope="col">Ações</th>
					<th scope="col">Ajustes</th>
				</tr>
			</tfoot>
		</table>
	</div>

	<!-- Script referente ao datatable importado externamento do site do Datable  -->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jsdataTable.js"></script>

 
<p id="demo"></p>
 
<script>

function enviarSMS(){
	var telefone = document.getElementById("telefone").value

	
}


function myFunction()
{
var x;
var tel = document.getElementById("telefone").value;

var idade=prompt("Escreve sua mensagem SMS para:");
 
if (idade!=null)
  {
  x ="Idade: " + idade + " anos.";
  document.getElementById("demo").innerHTML=x;
  }
}
</script>

</body>
</html>