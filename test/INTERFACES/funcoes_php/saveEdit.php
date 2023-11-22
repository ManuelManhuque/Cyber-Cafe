<?php
     include("../../INTERFACES/funcoes_php/config.php");

    if (isset($_POST['update'])) {
        $id_usuario = $_POST['id'];
        $name_user = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senhaHash'];
        $remember = filter_input(INPUT_POST, "remember", FILTER_VALIDATE_BOOL);
        $terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOL);
        
        $sqlUpdate = "UPDATE usuario SET 
        nome='$name_user',email='$email',senhaHash='$senha'
        WHERE id='$id_usuario'";

        $result = $conexao->query($sqlUpdate);
    }

    header("Location: ../INTERFACES/ADM/USUARIOS.php");
?>