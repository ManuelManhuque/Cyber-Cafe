<?php
    @include_once('Public/php_db/connect.php');

    if (isset($_POST['submit'])) {

        $name_user = $_POST['name_user'];
        $email = $_POST['email'];
        $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
        $remember = filter_input(INPUT_POST, "remember", FILTER_VALIDATE_BOOL);
        $terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOL);
        
        $sql = "INSERT INTO Users (name_user, email, senha)
        VALUES (?, ?, ?)";

        $stmt = mysqli_stmt_init($conn);

        if (! mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_error($conn));
        }

        mysqli_stmt_bind_param($stmt, "ssi",
                                $name_user,
                                $email,
                                $senha
                                );

        mysqli_stmt_execute($stmt);
        header("Location: index.php");
            
    }

?>