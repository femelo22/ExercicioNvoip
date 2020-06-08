<?php
include_once 'conexao_editar.php';
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
    
    <!-- Máscara de Telefone e CPF-->
    <script type="text/javascript" src="js/mask.js"></script>
    <script type="text/javascript" src="js/maskTelefone.js"></script>

    <script>
        function maiuscula(z){
        v = z.value.toUpperCase();
        z.value = v;
    }
    </script>

</head>
<body background="imagens/nvoip2.jpg">

    <div>
        <a href="index.php"><button type="button" class="btn btn-outline-white">Voltar</button></a>
    </div>
        
    <div>
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Editar Cliente</h2>
                </div>

                <!-- Formulário de editar -->
                <div class="card-body">
                    <form method="post" action="editar.php" enctype="multipart/form-data"> 

                        <input type="hidden" name="id_cliente" id="id_cliente" value="<?php echo $linha['id_cliente']; ?>">
                        <div class="form-row">
                            <div class="name">Nome</div>
                            <div class="value">
                                <input class="input--style-5" type="text" id="nome" name="nome" value="<?php echo $linha['nome']; ?>">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Sobrenome</div>
                            <div class="value">
                                <input class="input--style-5" type="text" id="sobrenome" name="sobrenome" value="<?php echo $linha['sobrenome']; ?>">
                            </div>
                        </div>
                           

                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" id="email" name="email" value="<?php echo $linha['email']; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">CPF</div>                            
                                <div class="input-group">
                                    <input class="input--style-5" type="text" id="cpf" name="cpf" onkeydown="javascript: fMasc( this, mCPF );" maxlength="14" value="<?php echo $linha['cpf']; ?>">
                                </div>                            
                        </div> 
                        
                        <div class="form-row">
                            <div class="name">CEP</div>                            
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="cep" id="cep" maxlength="9" value="<?php echo $linha['cep']; ?>">
                                </div>                            
                        </div>

                        <div class="form-row">
                            <div class="name">Endereço</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" id="rua" name="endereco" value="<?php echo $linha['endereco']; ?>"> 
                                </div>
                            </div>
                        </div>   

                        <div class="form-row">
                            <div class="name">Bairro</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" id="bairro" name="bairro" value="<?php echo $linha['bairro']; ?>">
                                </div>
                            </div>
                        </div> 
                        
                        <div class="form-row">
                            <div class="name">Cidade</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" id="cidade" name="cidade" value="<?php echo $linha['cidade']; ?>">
                                </div>
                            </div>
                        </div> 
                        
                        <div class="form-row">
                            <div class="name">Estado</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" id="uf" name="estado" value="<?php echo $linha['estado']; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Pais</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="pais" onkeyup="maiuscula(this)" value="<?php echo $linha['pais']; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Telefone</div>
                                <div class="input-group-desc">
                                    <input class="input--style-5" type="text" name="telefone" id="telefone" value="<?php echo $linha['telefone']; ?>" maxlength="11">
                                    <label class="label--desc">Número de Telefone</label>
                                </div>                         
                        </div></br>  
                       
                        <div class="container-login100-form-btn">
                            <button class="btn btn--radius-2 btn--green" name="editar" id="editar" value="editar">
                                Editar Cliente
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
