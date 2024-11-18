<?php

include('dbconnect.php');
session_start();

if (isset($_POST['logar'])) {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $login = "SELECT * FROM cadastro WHERE nome = '$nome' AND senha = '$senha';";
    $executar_login = mysqli_query($conn, $login);

    if (mysqli_num_rows($executar_login) > 0) {
        $_SESSION['nome'] = $nome;
        header("location: cadastro.html");

    } else {

        header("location: login.html?erro=1");
    }
}


?>