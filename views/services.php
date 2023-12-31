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
            padding-top: 12vh;
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
            <a href="#">Serviços</a>
            <a href="../views/login.php">Login</a>
            <a href="../views/contact.php">Contactos</a>
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



</div>

    </header>

    <!---------------------------------- conteudo section starts  ------------------------------>

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"><span> Nossos </span> Serviços:</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="../public/img/images/blog-3.jpeg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title"><b>Cafeteria: </b></a>
                    <p>Bem-vindo à nossa cafeteria acolhedora, onde o aroma do café fresco enche o ar e cada xícara é
                        uma experiência única. Aqui, a paixão pelo café se encontra com um ambiente aconchegante,
                        perfeito para desfrutar de momentos especiais e ótimas conversas. Explore nossa seleção de grãos
                        premium, saboreie deliciosos quitutes e deixe-se envolver pela magia do café. Sua jornada pelo
                        sabor começa aqui!</p>
                    <a href="../views/cafeteria.php" class="btn">Entrar</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../public/img/burn-3509504_1920.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title"><b>Burn Disk:</b></a>
                    <p>O nosso serviço Burn Disc oferece soluções de gravação de discos eficientes e confiáveis. Com
                        tecnologia de ponta, garantimos a criação de CDs e DVDs personalizados, seja para distribuição
                        de conteúdo, arquivamento de dados ou projetos de mídia. Conte conosco para transformar suas
                        ideias em discos físicos de alta qualidade, com sempre resultados excepcionais.</p><br><br>
                    <a href="../views/discoqueimado.php" class="btn">Entrar</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../public/img/machine.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title"><b>impressão:</b></a>
                    <p>Aqui realizamos impressões de alta qualidade com tecnologia de ponta. De documentos profissionais
                        a projetos criativos, estamos prontos para transformar suas ideias em realidade.Imprimimos
                        documentos, relatórios, apresentações e muito mais com precisão e rapidez. Garantimos resultados
                        nítidos e profissionais para atender às suas necessidades de impressão.</p><br><br>
                    <a href="../views/impressao.php" class="btn">Entrar</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../public/img/google-485611_1920.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title"><b>Navegação:</b></a>
                    <p>Aqui, proporcionamos um ambiente moderno e acolhedor com conexão rápida à internet. Trabalhe,
                        estude ou relaxe em nosso espaço confortável, desfrutando de bebidas e lanches. Satisfazemos
                        suas necessidades de conectividade.</p><br><br><br><br><br><br><br><br><br><br><br><br>
                    <a href="../views/navegacao.php" class="btn">Entrar</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../public/img/meeting.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title"><b>Salas de Conferencia:</b></a>
                    <p>Apresentamos nossas salas de conferência modernas e versáteis, com tecnologia de ponta e design
                        elegante, para reuniões de negócios e eventos especiais. Oferecemos opções personalizadas para
                        criar experiências memoráveis.</p>
                    <a href="../views/reservasSALAS.php" class="btn">Entrar</a>
                </div>
            </div>


    </section>

    <!-- section ends -->


    <!---------------------------------- conteudo section starts  ------------------------------>

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
            <a href="#">Serviços</a>
            <a href="../views/login.php">Login</a>
            <a href="../views/contact.php">Contactos</a>
            <a href="../views/about_us.php">Sobre Nós</a>
        </div>

        <div class="credit">created by <span>Cyber Solutions</span> | all rights reserved &reg;</div>

    </section>

    <!------------------------------- footer section ends ----------------------------------->


    <script src="../public/js/comportamento.js"></script>
</body>

</html>