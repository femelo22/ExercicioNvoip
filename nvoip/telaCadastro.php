<?php
include_once 'conexao.php';
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
    
    <!-- Máscara de Telefone,CPF e API do correios -->
    <script type="text/javascript" src="js/mask.js"></script>
    <script type="text/javascript" src="js/maskTelefone.js"></script>
    <script type="text/javascript" src="js/apiCorreio.js"></script>
    <script>
        function maiuscula(z){
        v = z.value.toUpperCase();
        z.value = v;
    }

        function avisoCadastro() {
            alert("Cliente Registrado!");
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
                    <h2 class="title">Cadastro de Cliente</h2>
                </div>

                <!-- Formulário de cadastro -->
                <div class="card-body">
                    <form method="POST" action="cadastrar.php"> 

                    
                    <div class="form-row">
                            <div class="name">Nome</div>
                            <div class="value">
                                <input class="input--style-5" type="text" name="nome">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Sobrenome</div>
                            <div class="value">
                                <input class="input--style-5" type="text" name="sobrenome">
                            </div>
                        </div>
                           

                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="email">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">CPF</div>                            
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="cpf" onkeydown="javascript: fMasc( this, mCPF );" maxlength="14">
                                </div>                            
                        </div> 
                        
                        <div class="form-row">
                            <div class="name">CEP</div>                            
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="cep" id="cep" maxlength="9" onblur="pesquisacep(this.value);">
                                </div>                            
                        </div>

                        <div class="form-row">
                            <div class="name">Endereço</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" id="rua" name="endereco">
                                </div>
                            </div>
                        </div>   

                        <div class="form-row">
                            <div class="name">Bairro</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" id="bairro" name="bairro">
                                </div>
                            </div>
                        </div> 
                        
                        <div class="form-row">
                            <div class="name">Cidade</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" id="cidade" name="cidade">
                                </div>
                            </div>
                        </div> 
                        
                        <div class="form-row">
                            <div class="name">Estado</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" id="uf" name="estado">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Pais</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="pais" onkeyup="maiuscula(this)">
                                </div>
                            </div>
                        </div>
                        
                        <!--              CAMPO TELEFONE COM MÁSCARA              -->
                        <!-- <div class="form-row">
                            <div class="name">Telefone</div>
                                <div class="input-group-desc">
                                    <input class="input--style-5" type="text" name="telefone" id="telefone" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);">
                                    <label class="label--desc">Número de Telefone</label>
                                </div>                         
                        </div></br> -->

                        <div class="form-row">
                            <div class="name">Telefone</div>
                                <div class="input-group-desc">
                                    <input class="input--style-5" type="text" name="telefone" id="telefone" maxlength="11">
                                    <label class="label--desc">Número de Telefone</label>
                                </div>                         
                        </div></br>  
                       
                        <div>
                            <button class="btn btn--radius-2 btn--green" type="submit" name="registrar" id="registrar" onclick="avisoCadastro()">Registrar</button>
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
