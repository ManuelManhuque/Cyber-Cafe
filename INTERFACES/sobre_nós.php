<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Cafe: Lion's Gate</title>


    <!-- link para icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- link para a folha de estilizacao -->
    <link rel="stylesheet" href="../CSS/EstilizacaoGeral.css">

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

        <nav class="navbar">
            <a href="../INTERFACES/Serviços.php">Serviços</a>
            <a href="../INTERFACES/login.php">Login</a>
            <a href="../INTERFACES/Contactos.php">Contactos</a>
            <a href="#">Sobre Nós</a>
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
                <img src="../ILUSTRACOES/Americano.jpg" alt="">
                <div class="content">
                    <h3>Item 02</h3>
                    <div class="price">500MT</div>
                </div>
            </div>

            <div class="cart-item">
                <span class="fas fa-times"></span>
                <!-- alguma imagem deve entrar aqui fica no canto superior direito da main-->
                <img src="../ILUSTRACOES/Americano.jpg" alt="">
                <div class="content">
                    <h3>Item 03</h3>
                    <div class="price">500MT</div>
                </div>
            </div>

            <a href="../INTERFACES/service/cafeteria.php" class="btn">Veja agora</a>
        </div>


    </header>


    <!-- a sessao comeca aqui -->
    <section class="about" id="about">

        <h1 class="heading"><span>sobre</span> Nós </h1>
        <div class="row">

            <div class="image" class="altura">
                
                <img src="../ILUSTRACOES/labpc.jpg" alt="Nossa comunidade de inscritos" height="980vh">
            </div>

                <div class="content">
                    <h3> Bem-vindo ao Nosso Internet Café!</h3>
                    
                    <p>
                        No Nosso Internet Café, nossa missão é proporcionar uma experiência excepcional de internet para todos os nossos clientes. Somos mais do que apenas um lugar para acessar a web; somos um espaço de conveniência, produtividade e entretenimento digital.
                        
                   </p>                
                   
                   <h3> Nossa História:</h3>
                     <p> 
                        Fundado em 2023, o Nosso Internet Café tem sido uma parte essencial da comunidade, servindo residentes locais, viajantes e estudantes que desejam aproveitar a internet de alta velocidade, serviços de impressão e uma variedade de opções de jogos online.  <br>
                    </p>

                    <h3>Endereço:</h3>
                     <p> 
                        Estamos localizados no bairro Matacuane, avenida Alfredo Lawley, rua nº 47. <br>
                    </p>

                    <div class="sbr">
                    <div class="t">
                    <h3>Contactos:</h3>
                     <p> 
                        +258 83 123 4321;<br>
                        +258 84 123 4321;<br>
                        +258 86 123 4321;<br>
                    </p>
                    </div>

                    <div class="t">
                        <h3>Gerente:</h3>
                         <p> 
                            Bob Marley.<br>
                        </p>
                        
                    </div>
    
                    <div class="t">
                        <h3>Email:</h3>
                         <p> 
                            lion'sgate@gmail.com<br>
                        </p>
                        
                    </div>

                </div>
                    
                </div>

               
     </div>

     <h1 class="heading" style="padding-top: 7rem; padding-bottom: 2rem;"><span>O Que </span> Oferecemos? </h1>
     <div class="row">

                <div class="image">
                    <img src="../ILUSTRACOES/fiber-optic-4393369_1920.jpg" alt="Roteador 6G" class="ft">
                </div>

                <div class="content">
                    <h3>Acesso à Internet Rápida:</h3>
                    
                    <p>
                        Oferecemos conexões de alta velocidade para navegação na web, download e streaming de vídeos. Nossos clientes podem confiar em uma conexão estável e rápida para suas necessidades online.
                        
                   </p>                
                </div>
            </div>

<br><br><br><br><br>
            
            <div class="row">

                <div class="image">
                    <img src="../ILUSTRACOES/Sem-Título-1.png" alt="" class="ft">
                </div>

                <div class="content">
                    <h3>Área de Jogos Online:</h3>
                    
                    <p>
                        Se você é um entusiasta de jogos, temos uma seleção de estações de jogos online para fornecer horas de diversão. Jogue com seus amigos ou participe de jogos em equipe na atmosfera emocionante do Nosso Internet Café.
                        
                   </p>                
                </div>
            </div>

            <br><br><br><br><br>


                        <div class="row">

                <div class="image">
                    <img src="../ILUSTRACOES/machine-585262_1920.jpg" alt="" class="ft">
                </div>

                <div class="content">
                    <h3>Serviços de Impressão:</h3>
                    
                    <p>
                        Precisa imprimir documentos importantes? Temos serviços de impressão de alta qualidade disponíveis para atender a todas as suas necessidades, seja para trabalho, estudo ou uso pessoal.
                        
                   </p>                
                </div>
            </div>

            <br><br><br><br><br>

            <div class="row">

                <div class="image">
                    <img src="../ILUSTRACOES/coffeehouse-2600877.jpg" alt="" class="ft">
                </div>

                <div class="content">
                    <h3>Cafetaria:</h3>
                    
                    <p>
                      Mantemos uma variedade de lanches e bebidas para que você possa recarregar suas energias enquanto trabalha ou joga.
                        
                   </p>                
                </div>
            </div>

            <br><br><br><br><br>

            <div class="row">

                <div class="image">
                    <img src="../ILUSTRACOES/receptionists-5975962_1920.jpg" alt="" class="ft">
                </div>

                <div class="content">
                    <h3>Atendimento Amigável:</h3>
                    
                    <p>
                        Nossa equipe está sempre pronta para ajudar e garantir que sua experiência seja a melhor possível. Se você precisar de alguma assistência, não hesite em pedir.
                   </p>                
                </div>
            </div>

            <br><br><br><br><br>

            <div class="row">

                <div class="image">
                    <img src="../ILUSTRACOES/meeting-room-828547_1920.jpg" alt="" class="ft">
                </div>

                <div class="content">
                    <h3>Salão de Conferências:</h3>
                    
                    <p>
                        Nosso espaço de conferências é o local ideal para sediar eventos corporativos, palestras, workshops e reuniões importantes. Aqui, fornecemos a infraestrutura perfeita para tornar o seu evento um sucesso memorável.
                   </p>                
                </div>
            </div>

            <br><br><br><br><br>

            <div class="row">
            <div class="content">
                        <h3>Horários de Funcionamento</h3> <br>
                        
                        <p>Estamos comprometidos em estar disponíveis quando você mais precisa de nós. Nosso Internet Café está aberto das <b>07:30 - 21:30</b>, oferecendo flexibilidade para atender a todos os tipos de agendas.</p>
                        
                        <p>Visite-nos Hoje!</p>
                        
                       <p> Esperamos que você nos visite em breve e experimente o Nosso Internet Café em primeira mão. Seja para trabalhar remotamente, jogar, socializar ou simplesmente relaxar, temos o espaço e os recursos para atender a todas as suas necessidades online. Sinta-se em casa no Nosso Internet Café!</p>
                        <p>
                        Agradecemos por nos escolher como seu destino digital. Até logo!
                    </p>
                </div>
            </div>

                    
                
            </div>
            
        
    </section>
    <!-- a sessao termina aqui -->

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
            <a href="../INTERFACES/Serviços.php">Serviços</a>
            <a href="../INTERFACES/login.php">Login</a>
            <a href="../INTERFACES/Contactos.php">Contactos</a>
            <a href="#">Sobre Nós</a>
        </div>

        <div class="credit">created by <span>Cyber Solutions</span> | all rights reserved &reg;</div>

    </section>

    <!------------------------------- footer section ends ----------------------------------->

    <script src="../JS/comportamento.js"></script>
</body>

</html>