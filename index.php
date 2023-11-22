<?php
session_start();

$email = isset($_SESSION['email']) ? $_SESSION['email'] : null;

if (!empty($email)) {
    include_once($_SERVER['DOCUMENT_ROOT'] . '/db/config.php');

    // Retrieve username from the database based on the email
    $sql = "SELECT name FROM users WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $username = $row['name'];
    } else {
        // Handle the case where the user is not found in the database
        $username = "User Not Found";
    }
} else {
    // Handle the case where $_SESSION['email'] is not set or empty
    $username = "Guest";
}
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
    <link rel="stylesheet" href="../public/css/main_style.css">
    <!-- <link rel="stylesheet" href="CSS/EstilizacaoGeral.css"> -->

    <link rel="shortcut icon" href="../public/img/logo.png" type="image/x-icon">

</head>

<body style="margin-top: 4vh;">
    <!-- comeco do header -->
    <header class="header">
        <!-- logotipo vem aqui -->
        <!-- e a ref retornara a pag main -->
        <a href="#" class="logo">
            <img src="../public/img/logo.png">
        </a>
        <!-- <div id="menuToggle"> -->
        <nav class="navbar">
            <a href="../views/services.php">Serviços</a>
            <a href="../views/login.php">Login</a>
            <a href="../views/contact.php">Contactos</a>
            <a href="../views/about_us.php">Sobre Nós</a>
           
            <!-- <a href="/INTERFACES/sobre_nós.html">Sobre Nós</a> -->
        </nav>
        <div class="admin">
                <?php
                if ($username == "Admin") {
                    echo '<a href="../views/_index.php">Painel Admin</a>';
                }

                ?>
            </div>
        <div class="perfil">
            
            <a href="../views/_logout.php" class="perfil_button">
                <?php
                if (!isset($_SESSION['email'])) {
                    echo '<div class="username">Perfil</div>';
                } else {
                    echo '<div class="username">' . $username . '</div>';

                }
                ?>
                <img src="../public/img/customer02.jpg" alt="">
                <div class="logout">Sair</div>
            </a>
        </div>
        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>
        <div class="cart-items-conteiner">
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <!-- alguma imagem deve entrar aqui fica no canto superior direito da main-->
                <img src="../public/img/Americano.jpg" alt="">
                <div class="content">
                    <h3>Item 02</h3>
                    <div class="price">500MT</div>
                </div>
            </div>

            <div class="cart-item">
                <span class="fas fa-times"></span>
                <!-- alguma imagem deve entrar aqui fica no canto superior direito da main-->
                <img src="../public/img/Americano.jpg" alt="">
                <div class="content">
                    <h3>Item 02</h3>
                    <div class="price">500MT</div>
                </div>
            </div>

            <div class="cart-item">
                <span class="fas fa-times"></span>
                <!-- alguma imagem deve entrar aqui fica no canto superior direito da main-->
                <img src="../public/img/Americano.jpg" alt="">
                <div class="content">
                    <h3>Item 03</h3>
                    <div class="price">500MT</div>
                </div>
            </div>

            <a href="../views/service/cafeteria.html" class="btn">Veja agora</a>
        </div>




    </header>
    <!-- final do header -->

    <!-- home section strart -->

    <section class="home" id="home">


        <div class="content">
            <h1 class="heading"> <span>Cyber Cafe:</span> Lion's Gate </h1>
            <p>Bem-vindo ao nosso Internet Café! Somos o seu destino premium para conectividade rápida, café fresco e um
                ambiente acolhedor. Oferecemos acesso à internet de alta velocidade, computadores modernos e uma
                variedade de bebidas quentes e lanches para tornar a sua experiência ainda mais agradável. Seja para
                trabalho, estudos ou simplesmente para navegar na web, estamos aqui para atender às suas necessidades de
                conectividade. Visite-nos hoje e desfrute de uma experiência de Internet Café de alta qualidade</p>
            <a href="../views/about_us.php" class="btn">Saiba mais!</a>
        </div>
    </section>
    <!-- home section ends -->


    <!---------------------------------- footer section starts  ------------------------------>

    <section class="footer">

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="links">
            <a href="../views/services.php">Serviços</a>
            <a href="../views/login.php">Login</a>
            <a href="../views/contact.php">Contactos</a>
            <a href="../views/about_us.php">Sobre Nós</a>
        </div>

        <div class="credit">created by <span>Cyber Solutions</span> | all rights reserved &reg;</div>

    </section>




    <!------------------------------- footer section ends ----------------------------------->

    <!-- link para o javascript -->
    <script src="../public/js/comportamento.js"></script>
</body>

</html>