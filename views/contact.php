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

    <link rel="shortcut icon" href="../public/img/logo.png" type="image/x-icon">
    <style>
        body {
            margin-top: 12vh;
        }
    </style>

</head>

<body>


    <!-- comeco do header -->
    <header class="header">
        <!-- logotipo vem aqui -->
        <!-- e a ref retornara a pag main -->
        <a href="../index.php" class="logo">
            <img src="../public/img/logo.png">
        </a>

        <nav class="navbar">
            <a href="../views/services.php">Serviços</a>
            <a href="../views/login.php">Login</a>
            <a href="#">Contactos</a>
            <a href="../views/about_us.php">Sobre Nós</a>
        </nav>

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

    <a href="../views/service/cafeteria.php" class="btn">Veja agora</a>
</div>
    </header>
    <!----------------------------- contacto comeca aqui-------------------------- -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>Nos</span> contacte </h1>

        <div class="row">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3753.184088376882!2d34.862319075224725!3d-19.832162281534362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1f2a4027d25b54c1%3A0x332692b555cb6034!2sUniversidade%20Zambeze%20-%20UniZambeze!5e0!3m2!1spt-PT!2smz!4v1697983263578!5m2!1spt-PT!2smz"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

            <form action="#">
                <h3>Entre em Contacto connosco</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="Nome">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="Email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="Número">
                </div>
                <input type="submit" value="Contacte Ja" class="btn">
            </form>

        </div>

    </section>

    <!----------------------------- contacto acaba aqui-------------------------- -->


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
            <a href="#">Contactos</a>
            <a href="../views/about_us.php">Sobre Nós</a>
        </div>

        <div class="credit">created by <span>Cyber Solutions</span> | all rights reserved &reg;</div>

    </section>

    <!------------------------------- footer section ends ----------------------------------->



    <script src="../public/js/comportamento.js"></script>
</body>

</html>