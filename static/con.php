<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWD', '140293');
define('DB', 'pokedex');

//tenta conexão
try {
        $conn = mysqli_connect(HOST, USER, PASSWD, DB); 
    }  //dispara erro caso não conectar
    catch (PDOException $e) {
        echo 'Database Error // Erro de conexão '. $e->getMessage(). ' in / em '. $e->getFile().
            ': '. $e->getLine();   
}
     
?>