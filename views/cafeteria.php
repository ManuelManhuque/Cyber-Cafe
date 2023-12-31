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
    <link rel="stylesheet" href="../public/css/cafeteria.css">
    <link rel="shortcut icon" href="../public/img/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>

<body>



    <!-- comeco do header -->
    <header class="header">
        <!-- logotipo vem aqui -->
        <!-- e a ref retornara a pag main -->
        <a href="../index.php" class="logo">
            <img src="../public/img/logo.png">
        </a>

        <nav class="navbar" class="lin">
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
        <img src="../ILUSTRACOES/Americano.jpg" alt="">
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

    <a href="#" class="btn">Veja agora</a>
</div>


    </header>


    <!---------------------------- cafeteria section starts  ------------------------------>

    <section class="menu" id="menu">

        <h1 class="heading"> <span>CAFE</span>TARIA </h1>

        <div class="box-container">

            <div class="box">
                <img src="../public/img/images/menu-1.png" alt="">
                <h3>Café Tunki</h3>
                <div class="price">470MT <span>500MT</span></div>
                <?php
                    if (!isset($_SESSION['email'])) {
                        echo '<a href="../views/login.php" class="btn">Solicitar</a>';
                    } else {
                        echo '<a href="../views/pagamento.php" class="btn">Solicitar</a>';

                    }
                    ?>
            </div>

            <div class="box">
                <img src="../public/img/images/menu-2.png" alt="">
                <h3>Macchiato</h3>
                <div class="price">300MT <span>440MT</span></div>
                <?php
                    if (!isset($_SESSION['email'])) {
                        echo '<a href="../views/login.php" class="btn">Solicitar</a>';
                    } else {
                        echo '<a href="../views/pagamento.php" class="btn">Solicitar</a>';

                    }
                    ?>
            </div>

            <div class="box">
                <img src="../public/img/images/menu-3.png" alt="">
                <h3>Mocha</h3>
                <div class="price">550MT <span>500MT</span></div>
                <?php
                    if (!isset($_SESSION['email'])) {
                        echo '<a href="../views/login.php" class="btn">Solicitar</a>';
                    } else {
                        echo '<a href="../views/pagamento.php" class="btn">Solicitar</a>';

                    }
                    ?>
            </div>

            <div class="box">
                <img src="../public/img/images/menu-4.png" alt="">
                <h3>Cappuccino</h3>
                <div class="price">490MT <span>500MT</span></div>
                <?php
                    if (!isset($_SESSION['email'])) {
                        echo '<a href="../views/login.php" class="btn">Solicitar</a>';
                    } else {
                        echo '<a href="../views/pagamento.php" class="btn">Solicitar</a>';

                    }
                    ?>
            </div>

            <div class="box">
                <img src="../public/img/images/menu-5.png" alt="">
                <h3>Café Americano</h3>
                <div class="price">400MT</div>
                <?php
                    if (!isset($_SESSION['email'])) {
                        echo '<a href="../views/login.php" class="btn">Solicitar</a>';
                    } else {
                        echo '<a href="../views/pagamento.php" class="btn">Solicitar</a>';

                    }
                    ?>
            </div>

            <div class="box">
                <img src="../public/img/images/menu-6.png" alt="">
                <h3>Café Com Leite</h3>
                <div class="price">100MT</div>
                <?php
                    if (!isset($_SESSION['email'])) {
                        echo '<a href="../views/login.php" class="btn">Solicitar</a>';
                    } else {
                        echo '<a href="../views/pagamento.php" class="btn">Solicitar</a>';

                    }
                    ?>
            </div>

        </div>

    </section>

    <!------------------------ CAFETARIA section ends ----------------------------------->

    <section class="products" id="products">

        <h1 class="heading"><span>Os</span> Nossos Productos </h1>

        <div class="box-container">

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="../public/img/images/product-1.png" alt="">
                </div>
                <div class="content">
                    <h3>Café Nicaragua</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">2070MT <span>2200MT</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="../public/img/images/product-2.png" alt="">
                </div>
                <div class="content">
                    <h3>Café Columbia</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">4000MT <span>3900MT</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="../public/img/images/product-3.png" alt="">
                </div>
                <div class="content">
                    <h3>Café Peruiano</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">1000Mt</div>
                </div>
            </div>

        </div>

    </section>

    <!----------------------------------------------- review section starts  ----------------------------------->

    <section class="review" id="review">

        <h1 class="heading"><span>Feedback</span> dos Clientes </h1>

        <div class="box-container">

            <div class="box">
                <img src="../../images/quote-img.png" alt="" class="quote">
                <p>Amei a atmosfera aconchegante da cafeteria e o serviço amigável. O café foi delicioso e fresco, e o
                    bolo de chocolate era incrível! Definitivamente vou voltar.
                    Além disso, a música ambiente era perfeita para relaxar e trabalhar. Isso acrescentou um toque
                    especial à experiência.
                </p>
                <img src="../public/img/images/pic-3.png" class="user" alt="">
                <h3>Ali Afzal</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="../../images/quote-img.png" alt="" class="quote">
                <p>A cafeteria tem um ambiente ótimo para trabalhar ou relaxar. A variedade de opções de café é
                    impressionante, e o barista foi muito experiente ao me ajudar a escolher um café que combinasse com
                    o meu gosto. Minha única sugestão seria adicionar mais opções de lanches saudáveis.</p>
                <img src="../public/img/images/pic-1.png" class="user" alt="">
                <h3>Abu Bakkar</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="../../images/quote-img.png" alt="" class="quote">
                <p>Esta cafeteria é um lugar maravilhoso para encontrar amigos. Os preços são razoáveis, o café é bom, e
                    a equipe é muito atenciosa. Eu gostaria que eles tivessem mais opções de leite não lácteo, mas, no
                    geral, tive uma ótima experiência.</p>
                <img src="../public/img/images/pic-2.png" class="user" alt="">
                <h3>M.Ramzan</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </section>

    <!----------------------------- review section ends ------------------------------------------------------->

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
</body>

</html>