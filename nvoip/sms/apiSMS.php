<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.nvoip.com.br/v1/sms");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, "{
  \"celular\": \"Número do celular que irá receber o SMS\",
  \"msg\": \"Mensagem que será enviada\"
}");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json",
  "token_auth: token para autenticação"
));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);

$id_remetente = $_GET['id_cliente'];
$telefone = $_GET['telefone'];

$query = "SELECT id_cliente, telefone FROM clientes WHERE id_cliente = '$id_remetente'";
?>

