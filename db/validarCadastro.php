<?php
    session_start();
    // print_r($_REQUEST);
    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        //Acessar ao sistema
        include("../../INTERFACES/funcoes_php/config.php");
        $email = $_POST['email'];
        $senha = $_POST['senhaHash'];

        // print_r('Email:'.$email);
        // print_r('Senha:'.$senha);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senhaHash = '$senha'";
        $result = $conn->query($sql);

        // print_r($sql);
        // print_r($result);
        //Verificando se o usuario ja acessou a nossa pagina
        if (mysqli_num_rows($result) < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['senhaHash']);
            header('Location: ../INTERFACES/index.php');
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['senhaHash'] = $senha;
            header('Location: ../INTERFACES/ADM/USUARIOS.php');
        } 

    }else {
        //Nao acessa ao sistema
        header('Location: ../INTERFACES/index.php');
    }

    
?>
