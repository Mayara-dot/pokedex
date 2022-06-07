<?php
include('../php/verifyLogin.php');
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/favicon.png" sizes="32x32"> <!-- FavIcon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css"> <!-- Bulma.io CSS-->
    <link rel="stylesheet" type="text/css" href="../css/panel.css"> <!-- CSS-->
    <script src="https://kit.fontawesome.com/b48df8fe64.js" crossorigin="anonymous"></script> <!-- Font Icons-->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Font-family Google-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  <!-- Font-family Google-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" >  <!-- Font-family Google-->
    <title> .: Sua Pokédex</title>
</head>
<body>
<img id="backImg" src="../images/pokemons.jpg" alt="">
    <section class="hero is-danger">  
        <div class="hero-body">
            <div class="container has-text-centered">
                <p class="title">
                    Olá, <?php echo $_SESSION['user'];?>
                </p>
            </div>
           
        </div>

        <div class="hero-foot">
            <nav class="tabs is-boxed is-fullwidth">
                <div class="container">
                    <ul>
                        <li>
                            <a href="panel.php">Pokémons</a>
                        </li>
                        <li class="is-active">
                            <a href="/html/pokedex.php">Sua Pokédex</a>
                        </li>
                        <li>
                            <a href="/php/logout.php">Fechar Pokédex</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
    <section class="hero is-success">
        <div class="hero-body">
            <div class="container has-text-black">
                <div>
                    <p>Barra de pesquisa//filtro</p>
                </div>
                <div class="grid-container">
                  
                </div>
            </div>
        </div>
    </section>
</body>
</html>