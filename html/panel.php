<?php
include('../php/verifyLogin.php');

$url = "https://www.canalti.com.br/api/pokemons.json";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$pokemons = json_decode(curl_exec($ch));
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
            <?php
            if(count($pokemons->pokemon)) {
            $i = 0;
            foreach($pokemons->pokemon as $Pokemon) {
            $i++;
            ?>
            <?php if($i % 3 == 1) { ?>
            <div class="columns features">
            <?php } ?>
                <div class="column is-4">
                <div class="card">
                    <div class="card-image has-text-centered">
                    <figure class="image is-128x128">
                        <img src="<?=$Pokemon->img?>" alt="<?=$Pokemon->name?>" class="" data-target="modal-image2">
                    </figure>
                    </div>
                    <div class="card-content has-text-centered">
                    <div class="content">
                        <h4><?=$Pokemon->name?></h4>
                        <p>
                        <ul>
                        <?php
                        if(count($Pokemon->next_evolution)) {
                            echo "Próximas evoluções: ";
                            foreach($Pokemon->next_evolution as $ProximaEvolucao) {
                                echo $ProximaEvolucao->name . " ";
                            }
                        } else {
                            echo "Não possui próximas evoluções ";
                        }
                        ?>
                        </ul>
                        </p>
                    </div>
                    </div>
                </div>
                </div>
            <?php if($i % 3 == 0) { ?>
            </div>
            <?php } } } else { ?>
                <strong>Nenhum pokemón retornado pela API</strong>
            <?php } ?>
               <!--<table class="table is-fullwidth">
                   <tr>
                       <th>Imagem</th>
                       <th>Nome</th>
                       <th>Tipo</th>
                       <th>Pontuação</th>
                   </tr>
                   <tr>
                       <td>teste</td>
                       <td>teste</td>
                       <td>teste</td>
                       <td>teste</td>
                   </tr>
               </table>-->
            </div>
        </div>
    </section>
</body>
</html>