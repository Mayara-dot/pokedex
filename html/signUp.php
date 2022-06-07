<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/favicon.png" sizes="32x32"> <!-- FavIcon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css"> <!-- Bulma.io CSS-->
    <link rel="stylesheet" type="text/css" href="../css/index.css"> <!-- CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--Font Icons-->
    <link rel="stylesheet" href="http://fonts.cdnfonts.com/css/pokemon-solid" > <!-- Font-family  Pokemon-->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Font-family Google-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  <!-- Font-family Google-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" >  <!-- Font-family Google-->
    <title> .: Cadastro</title>
</head>
<body style="text-decoration:none"> 
    <div id="signUp" class="container has-text-centered">
        <?php
        if(isset($_SESSION['status_cadastro'])):
        ?>    
        <div class="notification is-success">
            <p>Cadastro efetuado!</p>
            <p>Faça login informando o seu usuário
             e senha <a href="../index.php">aqui</a></p>
        </div>
        <?php
        endif;
        unset($_SESSION['status_cadastro']);
        ?>
        
        <?php
        if(isset($_SESSION['usuario_existe'])):
        ?>    
        <div class="notification is-info">
            <p>O usuário escolhido já existe. 
                Informe outro e tente novamente.</p>
        </div>
        <?php
        endif;
        unset($_SESSION['usuario_existe']);
        ?>

        <?php
        if(isset($_SESSION['invalido'])):
        ?>    
        <div class="notification is-warning">
            <p>Cadastro inválido</p>
        </div>
        <?php
        endif;
        unset($_SESSION['invalido']);
        ?>
                <h3 id="title" class="title has-text-black">Pokédex</h3>
                    <div class="column">
                    <h3 id="title" class="subtitle has-text-white">Cadastro</h3>
                        <div class="box">
                            <form action="../php/register.php" method="POST">
                            <div class="field">
                                <label class="label has-text-left">Nome Completo</label>
                                    <div class="control has-icons-left">
                                        <input name="fullName" type="text" class="input is-large" placeholder="Seu Nome Completo" required>
                                        <span class="icon is-small is-left has-text-danger">
                                        <i class="fa fa-spinner"></i>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="field">
                                <label class="label has-text-left">Usuário</label>
                                    <div class="control has-icons-left">
                                        <input name="user" type="text" class="input is-large" placeholder="Seu usuário" required>
                                        <span class="icon is-small is-left has-text-danger">
                                        <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="field">
                                <label class="label has-text-left">E-mail</label>
                                    <div class="control has-icons-left">
                                        <input name="email" type="email" class="input is-large" placeholder="Seu e-mail" required>
                                        <span class="icon is-small is-left has-text-danger">
                                        <i class="fa fa-paper-plane-o"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="field">
                                <label class="label has-text-left">Senha</label>
                                    <div class="control has-icons-left">                                 
                                        <input id="passwd" name="passwd" class="input is-large" type="password" placeholder="Sua senha" 
                                        minlength="8" maxlength="32" required> 
                                        <span class="icon is-small is-left has-text-danger">
                                        <i class="fa fa-lock"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="control">
                                    <a id="showPasswd" class="button">
                                        <i id="showPasswd"  class="fa fa-eye"></i>
                                        Visualize sua senha
                                    </a>
                                </div>  

                                <script src="/../JS/showPasswd.js"> //Função para visualizar senha quando clciar no botão, ele muda o tipo do input     
                                </script>

                                <button id="buttonSignUp" type="submit" class="button is-danger is-outlined is-large is-fullwidth">Entrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>