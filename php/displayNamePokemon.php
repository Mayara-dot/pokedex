<?php
require('../static/urlApi.php');

try {
    foreach($pokemonsArray["pokemon"] as $Pokemon) {

        $name = $Pokemon["name"];
        $id = $Pokemon["id"];

        echo "<div id='$id' 
        class='js-modal-trigger'
        data-target='modalPokemon'>
        <div class='card'>
        $name
        </div>
        </div>";
        
    }

} catch (PDOException $e) { //se não conseguir pegar os dados
    echo 'Error // Erro '. $e->getMessage(). ' in / em '. $e->getFile().
    ': '. $e->getLine();
}
?>
