<?php
include_once 'conexao_editar.php';
     $id = $_GET['id_cliente'];
     $result_usuario = "SELECT telefone FROM clientes WHERE id_cliente = '$id' ";
     $resultado_usuario = mysqli_query($conexao, $result_usuario);
     $linha = mysqli_fetch_assoc($resultado_usuario);


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!-- Metatag responsiva -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Título-->
    <title>NVOIP</title>

    <!-- Icones-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

    <!-- Link CSS e fontes especiais-->
    <link href="css/main.css" rel="stylesheet" media="all"><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">


</head>
<body background="imagens/nvoip2.jpg">

    <div>
        <a href="index.php"><button type="button" class="btn btn-outline-white">Voltar</button></a>
    </div>

    <div>
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Enviar SMS</h2>
                </div>

                <div class="card-body">
                    <form method="post" action="sms/apiSMS.php" enctype="multipart/form-data">

                        <input type="hidden" name="id_cliente" id="id_cliente" value="<?php echo $linha['id_cliente']; ?>">

                        <div class="form-row">
                            <div class="name">Telefone</div>
                                <div class="input-group-desc">
                                    <input class="input--style-5" type="text" name="telefone" id="celular" value="<?php echo $linha['telefone']; ?>">
                                    <label class="label--desc">Número de Telefone</label>
                                </div>
                        </div></br>

                        <div class="form-row">
                            <div class="name">Mensagem</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="pais" id="msg">
                                </div>
                            </div>
                        </div> 

                        <div class="container-login100-form-btn">
                            <button class="btn btn--radius-2 btn--green" name="editar" id="editar" value="editar">
                                Enviar SMS
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>
</html>
