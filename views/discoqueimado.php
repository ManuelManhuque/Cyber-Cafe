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

    <link rel="shortcut icon" href="../../ILUSTRACOES/logo.png" type="image/x-icon">
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
            <a href="../views/services.php">Serviços</a>
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
        <img src="../../ILUSTRACOES/Americano.jpg" alt="">
        <div class="content">
            <h3>Item 02</h3>
            <div class="price">500MT</div>
        </div>
    </div>

    <div class="cart-item">
        <span class="fas fa-times"></span>
        <!-- alguma imagem deve entrar aqui fica no canto superior direito da main-->
        <img src="../../ILUSTRACOES/Americano.jpg" alt="">
        <div class="content">
            <h3>Item 02</h3>
            <div class="price">500MT</div>
        </div>
    </div>

    <div class="cart-item">
        <span class="fas fa-times"></span>
        <!-- alguma imagem deve entrar aqui fica no canto superior direito da main-->
        <img src="../../ILUSTRACOES/Americano.jpg" alt="">
        <div class="content">
            <h3>Item 03</h3>
            <div class="price">500MT</div>
        </div>
    </div>

    <a href="../../INTERFACES/service/cafeteria.php" class="btn">Veja agora</a>
</div>


    </header>

    <!---------------------------------- conteudo section starts  ------------------------------>

    <!--NAVEGACAO-------------------------------------------------------------------  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"><span> Burn</span> Disk:</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="../public/img/24x.jpg">
                </div>


                <div class="content">
                    <a href="#" class="title"><b>Burn 24x: </b></a>
                    <p>A mídia Burn Disk de 24x é a mais rápida entre as mencionadas. Ela suporta gravação a uma
                        velocidade máxima de 24x, o que é extremamente rápido. É adequada para tarefas de gravação que
                        requerem alta velocidade e eficiência, como criação de mídias de backup ou replicação em grande
                        escala.
                    </p>
                </div>
            </div>


            <div class="box">
                <div class="image">
                    <img src="../public/img/16x.jpg">
                </div>
                <div class="content">
                    <a href="#" class="title"><b>Burn 16x:</b></a>
                    <p> As mídias Burn Disk de 16x suportam gravação a uma velocidade máxima de 16x. Isso oferece uma
                        gravação ainda mais rápida e é ideal para quem precisa de eficiência máxima ao gravar dados em
                        CDs ou DVDs. É comumente usado para criar cópias de filmes, jogos e outros conteúdos em disco.
                    </p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../public/img/12x.jpg">
                </div>
                <div class="content">
                    <a href="#" class="title"><b>Burn 12x: </b></a>
                    <p> A mídia Burn Disk 12x suporta gravação a uma velocidade máxima de 12x. Isso proporciona uma
                        gravação mais rápida em comparação com a mídia de 8x. É uma escolha sólida quando você precisa
                        de gravações mais rápidas e pode ser útil para situações em que o tempo é essencial.
                    </p>
                </div>
            </div>


            <div class="box">
                <div class="image">
                    <img src="../public/img/8x.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title"><b>Burn 8x: </b></a>
                    <p>Este tipo de mídia suporta gravação a uma velocidade máxima de 8x. Isso significa que você pode
                        gravar dados em CD ou DVD a uma velocidade máxima de 8 vezes a velocidade normal de gravação. É
                        adequado para aplicações gerais e é uma opção confiável para gravações padrão.<br>
                    </p>
                </div>
            </div>

    </section>

    <!-- vavegaCAO -->


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
            <a href="../views/services.php">Serviços</a>
            <a href="../views/login.php">Login</a>
            <a href="../views/contact.php">Contactos</a>
            <a href="../views/about_us.php">Sobre Nós</a>
        </div>

        <div class="credit">created by <span>Cyber Solutions</span> | all rights reserved &reg;</div>

    </section>

    <!------------------------------- footer section ends ----------------------------------->


    <script src="../JS/comportamento.js"></script>
</body>

</html>