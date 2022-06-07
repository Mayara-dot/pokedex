<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/favicon.png" sizes="32x32"> <!-- FavIcon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css"> <!-- Bulma.io CSS-->
    <link rel="stylesheet" type="text/css" href="css/index.css"> <!-- CSS-->
    <script src="https://kit.fontawesome.com/b48df8fe64.js" crossorigin="anonymous"></script> <!-- Font Icons-->
    <link rel="stylesheet" href="http://fonts.cdnfonts.com/css/pokemon-solid" > <!-- Font-family  Pokemon-->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Font-family Google-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  <!-- Font-family Google-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" >  <!-- Font-family Google-->
    <title> .: Pokédex</title>
</head>
<body> 
    <div class="hero">
        <div class="columns">
            <div class="column">
                <div style="visibility:active" id="index" class="container">
                <h3 id="title" class="title has-text-black">Pokédex</h3>
                <h3 id="title" class="subtitle has-text-black">Abra a Sua Pokédex</h3>
                </div>
            </div>

            <div id="icon" class="column">
                <div onclick="displayLogin()">
                    <i id="icon" class="fa-solid fa-circle-notch"></i>
                </div>
            </div>    
        </div>
    </div>

    <div style="display:none" id="login" class="container has-text-centered">
        <?php
        if(isset($_SESSION['nao_autenticado'])):
        ?>
        <div class="notification is-danger">
        <p>ERRO: Usuário ou senha inválidos.</p>
        </div>
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>
            <h3 id="title" class="title has-text-black">Pokédex</h3>
                <div class="column">
                <h3 id="title" class="subtitle has-text-white">Login</h3>
                    <div class="box">
                        <form action="php/login.php" method="POST">
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

                            <div id="signUp" class="field">
                                <p><a href="html/signUp.php">Cadastre-se</a></p>
                            </div> 
                            <button type="submit" class="button is-danger is-outlined is-large is-fullwidth">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>  //Funcao de mostrar o formulário de login quando clicar no botão
            function displayLogin() {
                var display = document.getElementById('login');
                display.classList.toggle('active');
                var hide = document.getElementById('index');
                hide.classList.toggle('desactive');
            };
        </script>    
</body>
</html> 