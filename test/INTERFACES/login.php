<?php
    if(isset($_POST['submit'])){
        // print_r($_POST['nome']);
        // print_r($_POST['email']); teste de vizualizacao na tela
        // print_r($_POST['senha']);

        include_once('../INTERFACES/funcoes_php/config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senhaHash'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senhaHash)  VALUES('$nome', '$email', '$senha')");
    }
// -----------------------------------------------cadastro acaba aqui---------------------


// -----------------------------------------------login comeca aqui---------------------


 if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senhaHash'])){


        include_once('../INTERFACES/funcoes_php/config.php');
 
        $email = $_POST['email'];
        $senha = $_POST['senhaHash'];


        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senhaHash = '$senha'";

        $result = $conexao->query($sql);  

        if(mysqli_num_rows($result) < 1){
            header('Location: login.php');  
        }
 }
 
 else{
    //    header('Location: index.php');
    }

// -----------------------------------------------login acaba aqui---------------------
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Cafe: Lion's Gate</title>


    <!-- link para icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- link para a folha de estilizacao -->

    <link rel="stylesheet" href="../CSS/login.css">

    <link rel="shortcut icon" href="../ILUSTRACOES/logo.png" type="image/x-icon">
</head>

<body>


    <!-- comeco do header -->
    <header class="header">
        <!-- logotipo vem aqui -->
        <!-- e a ref retornara a pag main -->
        <a href="../INTERFACES/index.php" class="logo">
            <img src="../ILUSTRACOES/logo.png">
        </a>

        <nav class="navbar" class="lin">
            <a href="../INTERFACES/Serviços.php">Serviços</a>
			<a href="../INTERFACES/Serviços.php">Serviços</a>
            <a href="#">Login</a>
            <a href="../INTERFACES/Contactos.php">Contactos</a>
            <a href="../INTERFACES/sobre_nós.php">Sobre Nós</a>
        </nav>

        <div class="icons">

            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>




    </header>

    <!-- para aba de login vamos usar cont em vez de container
    cont -->
    <div class="container" id="container">
        <div class="form-container sign-up">
       

            <form action="login.php" method="post">
                <h1 class="a">Criar uma nova conta</h1>
                <div class="social-icons" id="c">
                    <a href="#" class="icon"><i class="fa-regular fa-envelope"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
                <span class="a">Ou utilize o seu Email e Palavra passe</span>
                <input type="text" placeholder="Name" name="nome">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Palavra passe" name="senhaHash">
                
                <button type="submit" name="submit" class="btn" class="a">Registrar</button>
            </form>

        </div>
        <div class="form-container sign-in">
            <form>
                <h1 class="a" >Entrar</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-regular fa-envelope"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
                <span class="a">Ou utilize o seu Email e Palavra passe</span>
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Palavra passe" name="senhaHash">
                <a href="#" id="c">Esqueceu a sua palavra Passe?</a>
                <button class="btn" class="a">Entrar</button>
            </form>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1 style="font-weight: bold; color: #fff;">Seja bem Vindo(a) de volta!</h1>
                    <p>Introduza o seus dados para que possa ter acesso a todas funcionalidades do Site</p>
                    <button class="hidden" id="login" id="c">Entrar</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1 class="a">Olá, Amigo(a)!</h1>
                    <p>Faça o registro para que possa ter acesso a todas funcionalidades do Site</p>
                    <button type="submit" class="hidden" id="register" class="btn">Registrar</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        const container = document.getElementById('container');
        const registerBtn = document.getElementById('register');
        const loginBtn = document.getElementById('login');

        registerBtn.addEventListener('click', () => {
            container.classList.add("active");
        });

        loginBtn.addEventListener('click', () => {
            container.classList.remove("active");
        });
    </script>

    <script src="../JS/comportamento.js"></script>
</body>

</html>