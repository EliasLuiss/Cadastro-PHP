<?php

include("dbconnect.php");

$id = isset($_POST['id']) ? $_POST['id'] : '';
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
$acao = isset($_POST['acao']) ? $_POST['acao'] : '';

echo "<br>ID: " . $id . "<br>" . $nome . "<br>" . $usuario . "<br>" . $email . "<br>" . $senha . "<br>" . $acao;

if($acao == 'Enviar'){
    $insert = "INSERT INTO usuarios (usuario, senha, email, nome) VALUES ('$usuario', '$senha', '$email', '$nome')";
    $executar_insert = mysqli_query($conn,$insert);
    echo "<br> Cadastro Concluído";
}  else if ($acao == 'Alterar'){

        $update = "UPDATE usuarios 
               SET usuario='$usuario', senha='$senha', email='$email', nome='$nome' 
               WHERE id='$id'";

        $executar_update = mysqli_query($conn, $update);

        if($executar_update){
            echo "Dados alterados com sucesso";
        } else {
            echo "Erro ao alterar dados: " . mysqli_error($conn);
        }
    }   else if ($acao == "Deletar") {
   
            $delet = "DELETE from usuarios where id = '$id'";
    
            $executar_delet = mysqli_query($conn,$delet); 

            if ($executar_delet) {

                echo "Deletado com Sucesso";

            } else {

            echo "Erro ao deletar" . mysqli_error ($conn);
        }
}


?>