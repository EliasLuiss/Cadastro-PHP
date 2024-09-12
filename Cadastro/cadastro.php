<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    
    <h1>Cadastro Cliente</h1><br><Br><br>

    <form action="processamento.php" method="post">

        <label for="id">Código:</label>
        <input type="number" name="id" placeholder="Digite o código do cliente"><br>
        
        <label for="nome">Nome:</label>
        <input type="text" name="nome" placeholder="Digite o nome do cliente"><br>
        
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" placeholder="Digite o nome do usuario"><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Digite o email do cliente"><br>
        
        <label for="senha">Senha:</label>
        <input type="password" name="senha" placeholder="Digite a senha do cliente"><br>
        
        <input type="submit" name="acao" value="Enviar">

        <input type="submit" name="acao" value="Alterar">

        <input type="submit" name="acao" value="Deletar">
    
        <input type="submit" name="listar" value="Listar">
        
    </form>
    
    <?php

        include('dbconnect.php');

        //if(isset($_POST['listar'])){

            $select = "SELECT id, nome, usuario, email from usuarios";
            $executar_select = $conn->query($select);

            if($executar_select->num_rows > 0){
                echo "<h2>Lista de Usuários</h2>";
                echo "<table border='1'>
                <tr>
                    <th>Código</th> <th>Nome</th> <th>Usuário</th> <th> E-mail</th> 
                </tr>";
                while($row = $executar_select->fetch_assoc()){
                    echo "  <tr>
                            <td>". $row['id'] . "</td> 
                            <td>" . $row['nome'] . "</td> 
                            <td>" . $row['usuario'] . "</td> 
                            <td>" . $row['email'] . "</td>
                            </tr>";
                }

            } else {
                echo "Não existe usuário cadastrado";
            }
      //  }
    ?>

</body>
</html>