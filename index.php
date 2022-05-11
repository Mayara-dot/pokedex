<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.png" sizes="32x32">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="https://kit.fontawesome.com/b48df8fe64.js" crossorigin="anonymous"></script>
    <link href="http://fonts.cdnfonts.com/css/pokemon-solid" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet"> 
    <title>Pokédex</title>
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
            <h3 id="title" class="title has-text-black">Pokédex</h3>
                <div class="column">
                <h3 id="title" class="subtitle has-text-white">Login</h3>
                    <div class="box">
                        <form action="php/login.php" method="POST">
                            <div class="field">
                            <label class="label has-text-left">Usuário</label>
                                <div class="control has-icons-left">
                                    <input name="usuario" type="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                    <span class="icon is-small is-left has-text-danger">
                                    <i class="fa fa-user"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="field">
                            <label class="label has-text-left">Senha</label>
                                <div class="control has-icons-left">                                 
                                    <input id="senha" name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                    <span class="icon is-small is-left has-text-danger">
                                    <i class="fa fa-lock"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="control">
                                <a id="visualiza" class="button">
                                    <i id="visualiza"  class="fa fa-eye"></i>
                                    Visualize sua senha
                                </a>
                            </div>  

                            <script>
                                let btn = document.querySelector('#visualiza');

                                    btn.addEventListener('click', function() {

                                        let input = document.querySelector('#senha');

                                        if(input.getAttribute('type') == 'password') {
                                            input.setAttribute('type', 'text');
                                        } else {
                                            input.setAttribute('type', 'password');
                                        }

                                    });
                            </script>

                            <div id="cadastrar" class="field has-text-left">
                                <p><a href="html/cadastro.php">Cadastre-se</a></p>
                            </div> 
                            <button type="submit" class="button is-danger is-outlined is-large is-fullwidth">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script> 
            function displayLogin() {
                var display = document.getElementById('login');
                display.classList.toggle('active');
                var hide = document.getElementById('index');
                hide.classList.toggle('desactive');
            };
        </script>    
</body>
</html> 