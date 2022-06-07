<?php
try {
    $url = "https://www.canalti.com.br/api/pokemons.json";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $pokemonsArray = json_decode((curl_exec($ch)), true);
        

} catch (PDOException $e) { //se não conseguir pegar os dados
    echo 'Error/ Erro '. $e->getMessage(). ' in / em '. $e->getFile().
    ': '. $e->getLine();
}
?>

