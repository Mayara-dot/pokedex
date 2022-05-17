<?php
session_start();
include('../static/con.php');

if(empty($_POST['user']) || empty($_POST['fullName'])
    || empty($_POST['passwd']) || empty($_POST['email'])) {
        $_SESSION['invalido'] = true;
        header("Location: /html/signUp.php");
        exit();
    }

try {
    $fullName = mysqli_real_escape_string($conn, trim($_POST['fullName']));
    $user = mysqli_real_escape_string($conn, trim($_POST['user']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $passwd = mysqli_real_escape_string($conn, trim(MD5($_POST['passwd'])));

    $query = "SELECT COUNT(*) AS total FROM pokedex.login WHERE user = '{$user}';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row['total'] == 1){
        $_SESSION['usuario_existe'] = true;
        header('Location: ../index.php');
        exit();
    }
    $query = "INSERT INTO pokedex.login (user, passwd, date_create, full_name, email) 
        VALUES ('$user', '$passwd', NOW(), '$fullName', '$email');";

    if($conn->query($query) === TRUE) {
        $_SESSION['status_cadastro'] = true;
        header('Location: ../index.php');
    }

    $conn->close();
    header('Location: ../html/signUp.php');
    exit();
    
} catch (Exception $e) {
    echo 'Error // Erro '. $e->getMessage(). ' in / em '. $e->getFile().
        ': '. $e->getLine();   
}

?>