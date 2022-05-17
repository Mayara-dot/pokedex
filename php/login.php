<?php
session_start();
include('../static/con.php'); //conexao com o banco de dados

if(empty($_POST['user']) || empty($_POST['passwd'])) { //se os campos estao vazios
    $_SESSION['nao_autenticado'] = true; //ativa card
    header('Location: /index.php'); //redireciona para pagina inicial
    exit();
}

try {
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $passwd = mysqli_real_escape_string($conn, $_POST['passwd']);

    $query = "SELECT user FROM pokedex.login WHERE user = '{$user}';";

    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);

    if($row == 1) { //se achar o registro no banco de dados
        $userDB = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $userDB['user'];
        header('Location: /html/panel.php');
    } else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: /index.php');
        exit();
    }

} catch (PDOException $e) { //se não conseguir pegar os dados
    echo 'Database Error // Erro de conexão '. $e->getMessage(). ' in / em '. $e->getFile().
    ': '. $e->getLine();
}
?>