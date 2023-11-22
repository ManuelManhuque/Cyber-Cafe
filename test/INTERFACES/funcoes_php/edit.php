<?php
    include("../../INTERFACES/funcoes_php/config.php");
    

    if(isset($_POST['submit'])){
        // print_r($_POST['nome']);
        // print_r($_POST['email']); teste de vizualizacao na tela
        // print_r($_POST['senha']);

        include_once('../INTERFACES/funcoes_php/config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senhaHash'];
        $cartao = $_POST['numero_cartao_credito'];
        $ano = $_POST['anos_associado'];
        $tipo = $_POST['usertype_id'];
        $cat = $_POST['categoria'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senhaHash, numero_cartao_credito, anos_associado, usertype_id, categoria)
          VALUES('$nome', '$email', '$senha', '$cartao',  '$ano', '$tipo', '$cat')");
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Edit</title>
</head>
<body>

<form action="saveEdit.php" method="post">
                <h1 class="a">Editar o Cadastro:</h1>
                
                <span class="a">Ou utilize o seu Email e Palavra passe</span>
                <input type="text" placeholder="Name" name="nome">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Palavra passe" name="senhaHash">
                <input type="number" placeholder="xxxx xxxx xxxx" name="numero_cartao_credito">
                <input type="number" placeholder="Ano" name="anos_associado">
                <input type="text" placeholder="Tipo" name="usertype_id">
                <input type="text" placeholder="Categoria" name="categoria">
                <button type="submit" class="btn" class="a">Registrar</button>
            </form>


</body>
</html>