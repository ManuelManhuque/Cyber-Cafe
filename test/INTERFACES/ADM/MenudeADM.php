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
        body{
            background-color: #13131a;
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
                    <a href="#">
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

          

            
<!-- 
                <li>
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

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Visualizações diarias</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Vendas</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Comentarios</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">7.842,00MT</div>
                        <div class="cardName">Ganhos</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Pedidos recentes</h2>
                        <a href="#" class="btn">Ver todos</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Nome</td>
                                <td>Preço</td>
                                <td>Pagamento</td>
                                <td>Estado</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>1.200,00MT</td>
                                <td>Pago</td>
                                <td><span class="status delivered">Entregues</span></td>
                            </tr>

                            <tr>
                                <td>Computador Dell</td>
                                <td>1.010,00MT</td>
                                <td>Devido</td>
                                <td><span class="status pending">Pendente</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>$1200</td>
                                <td>Pago</td>
                                <td><span class="status return">Voltar</span></td>
                            </tr>

                            <tr>
                                <td>Sapato Addidas</td>
                                <td>$620</td>
                                <td>Devido</td>
                                <td><span class="status inProgress">Em progresso</span></td>
                            </tr>

                            <tr>
                                <td>Star Refrigerator</td>
                                <td>1.200,00MT</td>
                                <td>Pago</td>
                                <td><span class="status delivered">Entregue</span></td>
                            </tr>

                            <tr>
                                <td>Computador HP</td>
                                <td>1.910,00MT</td>
                                <td>Devido</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>1.200,00MT</td>
                                <td>Pago</td>
                                <td><span class="status return">Voltar</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>6.020,00MT</td>
                                <td>Devido</td>
                                <td><span class="status inProgress">Em progresso</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Clientes Recentes</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../../ILUSTRACOES/boy-1846704_1920.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Maputo</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../../ILUSTRACOES/boys-1119222_1920.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>Nampula</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../../ILUSTRACOES/jovem.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Josia <br> <span>Quelimane</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../../ILUSTRACOES/woman-1919143_1920.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Tunisha <br> <span>Gaza</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../../ILUSTRACOES/rabbit-373691_1920.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Patrick <br> <span>Sofala</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../../ILUSTRACOES/cat-551554_1920.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Eliane <br> <span>Sofala</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../../ILUSTRACOES/brazil-1368806_640.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Eloide <br> <span>Chokwe</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../../ILUSTRACOES/portrait-3204843_1920.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Neo <br> <span>Catandica</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="../../JS/menudeadm.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>