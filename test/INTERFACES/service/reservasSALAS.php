<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Cafe: Lion's Gate</title>


    <!-- link para icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- link para a folha de estilizacao -->
    <link rel="stylesheet" href="../../CSS/EstilizacaoGeral.css">

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
        <a href="../../INTERFACES/index.html" class="logo">
            <img src="../../ILUSTRACOES/logo.png">
        </a>

        <nav class="navbar">
            <a href="../../INTERFACES/Serviços.php">Serviços</a>
            <a href="../../INTERFACES/login.php">Login</a>
            <a href="../../INTERFACES/Contactos.php">Contactos</a>
            <a href="../../INTERFACES/sobre_nós.php">Sobre Nós</a>
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

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"><span> Salas </span> de conferências:</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="../../ILUSTRACOES/meeting-room-828547_1920.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title"><b>sala conferências com datashow: </b></a>
                    <p>A nossa sala de conferências com datashow é o espaço perfeito para apresentações impactantes e
                        reuniões produtivas. Com equipamento de projeção de alta qualidade, oferecemos um ambiente
                        moderno e confortável para garantir que as suas apresentações se destaquem. Agende a sua reunião
                        na nossa sala com datashow e impressione os seus colaboradores e clientes com uma experiência
                        audiovisual.<br><br>
                        <br><br><br><br><br>

                        <b>Preço/ Hora: 1.500,00MT <br>
                            Reserva: 25% </b>
                    </p>
                    <a href="../../INTERFACES/service/resSalao.php" class="btn">Reservar</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../../ILUSTRACOES/Sem-Título-1.png" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title"><b> sala de laboratório com uma
                            série de máquinas com seu desempenho de hardware:</b></a>
                    <p>A nossa sala de laboratório é um centro de inovação e pesquisa equipado com uma série de máquinas
                        de última geração, cada uma com um desempenho de hardware impressionante. Essas máquinas são
                        verdadeiras ferramentas de excelência para experimentação e desenvolvimento. Com processadores
                        de alto desempenho, abundante memória RAM e GPUs poderosas, nossas estações de trabalho oferecem
                        o ambiente ideal para projetos complexos e análises intensivas de dados. <br><br>

                        <b>Preço/ Hora: 3.000,00MT <br>
                            Reserva: 25% </b>
                    </p>
                    <a href="../../INTERFACES/service/resSalao.php" class="btn">Reservar</a>
                </div>
            </div>






    </section>

    <!-- blogs section ends -->


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
            <a href="../../INTERFACES/Serviços.php">Serviços</a>
            <a href="../../INTERFACES/login.php">Login</a>
            <a href="../../INTERFACES/Contactos.php">Contactos</a>
            <a href="../../INTERFACES/sobre_nós.php">Sobre Nós</a>
        </div>

        <div class="credit">created by <span>Cyber Solutions</span> | all rights reserved &reg;</div>

    </section>

    <!------------------------------- footer section ends ----------------------------------->


    <script src="../../JS/comportamento.js"></script>
</body>

</html>