<?php 

include 'conexao.php';

$id_cliente = $_GET['id_cliente'];

$query = "DELETE FROM clientes WHERE id_cliente = $id_cliente";

mysqli_query($conexao, $query);

header('location:index.php?pagina=Consulta_+de_Clientes');
?>