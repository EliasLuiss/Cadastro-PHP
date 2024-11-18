<?php

include("dbconnect.php");

$nome = isset($_POST['firstname']) ? $_POST['firstname'] : '';
$sobrenome = isset($_POST['lastname']) ? $_POST['lastname'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$senha = isset($_POST['password']) ? $_POST['password'] : '';
$cep = isset($_POST['cep']) ? $_POST['cep'] : '';
$rua = isset($_POST['rua']) ? $_POST['rua'] : '';
$bairro = isset($_POST['bairro']) ? $_POST['bairro'] : '';
$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
$estado = isset($_POST['estado']) ? $_POST['estado'] : '';
$escola = isset($_POST['escola']) ? $_POST['escola'] : '';
$genero = isset($_POST['gender']) ? $_POST['gender'] : '';
$acao = isset($_POST['acao']) ? $_POST['acao'] : '';

echo "aqui";

if ($acao == 'Continuar') {
    $insert = "INSERT INTO cadastro (nome, sobrenome,email, senha, cep, rua, bairro, cidade, estado, escola, genero) VALUES ('$nome','$sobrenome', '$email', '$senha', '$cep', '$rua', '$bairro', '$cidade', '$estado','$escola','$genero')";
    $executar_insert = mysqli_query($conn, $insert);
    echo "<br> Cadastro Concluído";
    header("location: Login.html");

}

?>