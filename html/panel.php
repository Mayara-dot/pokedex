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
                        <li class="is-active">
                            <a href="panel.php">Pokémons</a>
                        </li>
                        <li>
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
                    <?php require __DIR__."/../php/displayNamePokemon.php"?>
                </div>
            </div>
        </div>
    </section>


    <!--MODAL POKEMON-->
    <section>
        <div id="modalPokemon" class="modal">
        <div class="modal-background"></div>
        <div class="modal-card has-text-centered">
            <header class="modal-card-head">
                <p id="titlePokemon"class="modal-card-title"> <span id="namePokemon"></span></p>
            </header>

            <section id="bodyPokemon"class="modal-card-body ">
                <div class="content">
                <figure class="image">
                <img id="imgPokemon" src="" id="imgPokemon" alt="Pokemonimage">
                </figure>

                <dl>
                <dt>--Tipo--</dt>
                    <dd><span id="typePokemon"></span> </dd>
                </br>    
                <dt>--Fraquezas--</dt>
                    <dd><span id="weaknessePokemon"></span></dd>
                </br>  
                <dt>--Próximas Evoluções--</dt>
                    <dd><span id="nextEvolutionPokemon"></span></dd>
                </dl>
                </div>
            </section>

            <footer class="modal-card-foot">

                <button type="submit" class="button is-info is-outlined">
                    <span class="icon">
                    <i class="fa-solid fa-plus"></i>
                    </span>
                    <span>Capture esse Pokémon</span>
                </button>

                <button id="closeModal" class="button is-danger is-outlined" aria-label="close">
                    <span>Fechar</span>
                    <span class="icon is-small">
                    <i class="fas fa-times"></i>
                    </span>
                </button>
            </footer>
        </div>
        </div>
    </section>

    <script src="/../JS/modal.js"></script>
</body>
</html>