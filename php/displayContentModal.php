<?php
require('../static/urlApi.php');

try {
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
        $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

        if (!empty($id)) {
            foreach($pokemonsArray["pokemon"] as $Pokemon) {
                if($Pokemon["id"] == $id) {

                    $data = [
                        "name" => strtoupper($Pokemon["name"]),
                        "img" => $Pokemon["img"],
                        "weaknesses" => $Pokemon["weaknesses"],
                        "type" => $Pokemon["type"],
                    ];


                    if(array_key_exists("next_evolution", $Pokemon)) {
                        foreach($Pokemon["next_evolution"] as $ProximaEvolucao) {
                            $name[] = $ProximaEvolucao["name"];
                        }
                        $data["nextEvolution"] = $name;
                        
                    } else {
                        $data["nextEvolution"] = strtoupper("Não há próximas evoluções");
                    }

                    $return = ["erro" => false, "data" => $data];
                }
            }

        } else {
            $return = ["erro" => true, "msg" => "Nenhum Pokemon encontrado"];
        }

        echo json_encode($return);
    }
    
} catch (PDOException $e) { //se não conseguir pegar os dados
    echo 'Error // Erro '. $e->getMessage(). ' in / em '. $e->getFile().
    ': '. $e->getLine();
}

?>