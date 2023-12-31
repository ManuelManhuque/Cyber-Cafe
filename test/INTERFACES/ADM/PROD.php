<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../ILUSTRACOES/logo.png" type="image/x-icon">
    <title>Cyber Cafe: Lion's Gate</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../../CSS/menuDeADM.css">
    <style>
        body {
            background-color: #13131a;
            text-align: center;
        }

        .cardHeader {
            padding-top: 0.5rem;

        }
    </style>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <!-- <ion-icon name="logo-apple"></ion-icon> -->
                        </span>
                        <span class="title" id="nomedapag">Lion's Gate</span>
                    </a>
                </li>

                <li>
                    <a href="../../INTERFACES/ADM/MenudeADM.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Visão Geral</span>
                    </a>
                </li>

                <li>
                    <a href="../../INTERFACES/ADM/USUARIOS.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Usuarios</span>
                    </a>
                </li>

                <li>
                    <a href="../../INTERFACES/ADM/PROD.php">
                        <span class="icon">
                            <ion-icon name="pencil-outline"></ion-icon>
                        </span>
                        <span class="title">Adicionar</span>
                    </a>
                </li>






                <!-- <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Palavra passe</span>
                    </a>
                </li> -->

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Deslogar</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- ========================= Main ==================== -->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <div class="search">
                <label>
                    <input type="text" placeholder="Pesquise aqui">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>

            <div class="user">
                <img src="../../ILUSTRACOES/customer02.jpg" alt="">
            </div>
        </div>





        <div class="cardHeader">
            <h2>Adicionar:</h2>
        </div>

        <form action="action">
            <div class="cardHeader2">
                <h3 style="font-weight: 700;">Produto:</h3>
            </div>

            <label for="name" class="al">Nome</label> <br>
            <input class="box1" type="text" name="name" id="name" placeholder="Digite o nome do Produto">

            <label for="name">Preço</label> <br>
            <input class="box1" type="number" name="name" id="name" placeholder="Digite o  Preço">






            <button class="btn" type="button"><a href="#">Adicionar</a></button>
        </form>


        <form action="action" style="margin-bottom: 2rem;">
            <div class="cardHeader2">
                <h3>Serviço:</h3>
            </div>

            <label for="name" id="al">Nome</label> <br>
            <input class="box1" type="text" name="name" id="name" placeholder="Digite o nome do Serviço">

            <label for="name" id="al">Preço</label> <br>
            <input class="box1" type="number" name="name" id="name" placeholder="Digite o  Preço">



            <button class="btn" type="button"><a href="#">Adicionar</a></button>
        </form>


        <form action="action" style="margin-bottom: 2rem;">
            <div class="cardHeader2">
                <h3>Informações adicionais:</h3>
            </div>



            <div class="gender-group">
                <label><b>Tipo de impressão: </b></label>
                <div class="escolha">
                    <label>Óleo:</label>
                    <input type="radio" name="oleo" id="oleo">&nbsp;&nbsp;
                    <label>Laser:</label>
                    <input type="radio" name="oleo" id="oleo">
                </div><br>

                <legend><b>Tipo de Sala:</b></legend>

                <div class="escolha">
                    <label>Com Projector:</label>
                    <input type="radio" name="Projector" id="Projector"> &nbsp;&nbsp;
                    <label>Com computadores:</label>
                    <input type="radio" name="Projector" id="Computador">    
                </div>
    
            </div>

        </form>









        <!-- =========== Scripts =========  -->
        <script src="../../JS/menudeadm.js"></script>

        <!-- ====== ionicons ======= -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>