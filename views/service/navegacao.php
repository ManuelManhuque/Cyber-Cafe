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
        <a href="../../INTERFACES/index.php" class="logo">
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

    <!--NAVEGACAO-------------------------------------------------------------------  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"><span> Nave</span>gação:</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="../../ILUSTRACOES/pc/pc10.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title"><b>Maquina 01: </b></a>
                    <p><b>-Processador:</b> Intel Core i9 de última geração <br>
                        <b>-Placa de vídeo:</b> NVIDIA GeForce RTX 3080<br>
                        <b>-Memória RAM:</b> 32GB DDR4<br>
                        <b>-Armazenamento:</b> SSD NVMe de 1TB<br>
                        <b>-Iluminação:</b> RGB Personalizável<br>
                        <b>-Áudio:</b> Imersivo com som surround<br>
                        -Construção premium e facilmente <br>
                        -Conectividade de alto desempenho, incluindo Wi-Fi <br><br>

                        <b>Preço/Minuto: 10,00MT</b><br>
                        <b>Reserva: 100,00MT</b>
                    </p>
                    <a href="../../INTERFACES/service/res.php" class="btn">Solicitar</a>
                </div>
            </div>


            <div class="box">
                <div class="image">
                    <img src="../../ILUSTRACOES/pc/portofolio pc.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title"><b>Maquina 02: </b></a>
                    <p><b>-Processador:</b> Intel Core i7 de última geração <br>
                        <b>-Placa de vídeo:</b> NVIDIA GeForce RTX 2070<br>
                        <b>-Memória RAM:</b> 16GB DDR4<br>
                        <b>-Armazenamento:</b> SSD NVMe de 500GB<br>
                        <b>-Iluminação:</b> RGB Personalizável<br>
                        <b>-Áudio:</b> Imersivo com som surround<br>
                        -Construção premium e facilmente <br>
                        -Conectividade de alto desempenho, incluindo Wi-Fi <br><br>

                        <b>Preço/Minuto: 08,00MT</b><br>
                        <b>Reserva: 100,00MT</b>
                    </p>
                    <a href="../../INTERFACES/service/res.php" class="btn">Solicitar</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="../../ILUSTRACOES/pc/pc8.jpg" alt="">
                </div>


                <div class="content">
                    <a href="#" class="title"><b>Maquina 03: </b></a>
                    <p><b>-Processador:</b> Intel Core i5 de última geração <br>
                        <b>-Placa de vídeo:</b> NVIDIA GeForce RTX 1080<br>
                        <b>-Memória RAM:</b> 12GB DDR4<br>
                        <b>-Armazenamento:</b> SSD NVMe de 256GB<br>
                        <b>-Iluminação:</b> RGB Personalizável<br>
                        <b>-Áudio:</b> Imersivo com som surround<br>
                        -Construção premium e facilmente <br>
                        -Conectividade de alto desempenho, incluindo Wi-Fi <br><br>

                        <b>Preço/Minuto: 06,00MT</b><br>
                        <b>Reserva: 100,00MT</b>
                    </p>
                    <a href="../../INTERFACES/service/res.php" class="btn">Solicitar</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="../../ILUSTRACOES/pc/pc3.jpg" alt="">
                </div>


                <div class="content">
                    <a href="#" class="title"><b>Maquina 04: </b></a>
                    <p><b>-Processador:</b> Intel Core i9 de última geração <br>
                        <b>-Placa de vídeo:</b> NVIDIA GeForce RTX 4080TX<br>
                        <b>-Memória RAM:</b> 124GB DDR4<br>
                        <b>-Armazenamento:</b> SSD NVMe de 10TB<br>
                        <b>-Iluminação:</b> RGB Personalizável<br>
                        <b>-Áudio:</b> Imersivo com som surround<br>
                        -Construção premium e facilmente <br>
                        -Conectividade de alto desempenho, incluindo Wi-Fi <br><br><br><br>
                        <b>Preço/Minuto: 20,00MT</b><br>
                        <b>Reserva: 100,00MT</b>
                    </p>
                    <a href="../../INTERFACES/service/res.php" class="btn">Solicitar</a>
                </div>
            </div>


            <div class="box">
                <div class="image">
                    <img src="../../ILUSTRACOES/pc/pc6.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title"><b>Maquina 05: </b></a>
                    <p><b>-Processador:</b> Intel Core i9 de última geração <br>
                        <b>-Placa de vídeo:</b> NVIDIA GeForce RTX 3080<br>
                        <b>-Memória RAM:</b> 32GB DDR4<br>
                        <b>-Armazenamento:</b> SSD NVMe de 1TB<br>
                        <b>-Iluminação:</b> RGB Personalizável<br>
                        <b>-Áudio:</b> Imersivo com som surround<br>
                        -Construção premium e facilmente <br>
                        -Conectividade de alto desempenho, incluindo Wi-Fi <br><br><br><br>
                        <b>Preço/Minuto: 10,00MT</b><br>
                        <b>Reserva: 100,00MT</b>
                    </p>
                    <a href="../../INTERFACES/service/res.php" class="btn">Solicitar</a>
                </div>
            </div>


            <div class="box">
                <div class="image">
                    <img src="../../ILUSTRACOES/pc/pc5.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title"><b>Maquina 06: </b></a>
                    <p><b>-Processador:</b> Intel Core 3 de última geração <br>
                        <b>-Placa de vídeo:</b> NVIDIA GeForce GTX 720<br>
                        <b>-Memória RAM:</b> 8GB DDR4<br>
                        <b>-Armazenamento:</b> SSD NVMe de 1TB<br>
                        <b>-Iluminação:</b> RGB Personalizável<br>
                        <b>-Áudio:</b> Imersivo com som surround<br>
                        -Construção premium e facilmente <br>
                        -Conectividade de alto desempenho, incluindo Wi-Fi <br><br><br><br>
                        <b>Preço/Minuto: 04,00MT</b><br>
                        <b>Reserva: 100,00MT</b>
                    </p>
                    <a href="../../INTERFACES/service/res.php" class="btn">Solicitar</a>
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