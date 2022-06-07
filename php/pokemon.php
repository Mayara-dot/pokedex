<?php
require('../static/urlApi.php');

try {
    
    
    

} catch (PDOException $e) { //se não conseguir pegar os dados
    echo 'Error // Erro '. $e->getMessage(). ' in / em '. $e->getFile().
    ': '. $e->getLine();
}
?>