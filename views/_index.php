<?php
session_start();

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSIOM['password']) == true)) {

    $dirname = "../views/login.php";

    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header("Location: /$dirname");
}

$logged = $_SESSION['email'];

include_once('../db/config.php');
// Retrieve username from the database based on the email
$sql = "SELECT name FROM users WHERE email = '$logged'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row["name"];
} else {
    $username = "User not found";
}

?>
<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../public/img/logo.png" type="image/x-icon">
    <title class="title">Cyber Cafe: Lion's Gate</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../public/css/_admin.css">
    <style>
        body {
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
                    <a href="../views/_users.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Listagem</span>
                    </a>
                </li>

                <li>
                    <a href="../views/_product.php">
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
                    <a href="../index.php">
                        <span class="icon">
                            <ion-icon name="home"></ion-icon>
                        </span>
                        <span class="title">Home</span>
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
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">24</div>
                        <div class="cardName">Visualizações diarias</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">6</div>
                        <div class="cardName">Vendas</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">14</div>
                        <div class="cardName">Comentarios</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">19.210,00MT</div>
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
                        
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td><b>Nome</b></td>
                                <td><b>Preço</b></td>
                                <td><b>Pagamento</b></td>
                                <td><b>Estado</b></td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Sala De Conferencia</td>
                                <td>6.200,00MT</td>
                                <td>Pago</td>
                                <td><span class="status delivered">Entregues</span></td>
                            </tr>

                            <tr>
                                <td>Cafe Nicaragua</td>
                                <td>2.070,00MT</td>
                                <td>Devido</td>
                                <td><span class="status pending">Pendente</span></td>
                            </tr>

                            <tr>
                                <td>Cafe com leite</td>
                                <td>100,00MT</td>
                                <td>Pago</td>
                                <td><span class="status return">Voltar</span></td>
                            </tr>

                            <tr>
                                <td>Sala De Conferencia</td>
                                <td>1020,00MT</td>
                                <td>Devido</td>
                                <td><span class="status inProgress">Em progresso</span></td>
                            </tr>

                            <tr>
                                <td>Cafe Columbia</td>
                                <td>4.000,00MT</td>
                                <td>Pago</td>
                                <td><span class="status delivered">Entregue</span></td>
                            </tr>

                            <tr>
                                <td>Cafe Peruiano</td>
                                <td>1.000,00MT</td>
                                <td>Devido</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Cafe Columbia</td>
                                <td>4.000,00MT</td>
                                <td>Pago</td>
                                <td><span class="status return">Voltar</span></td>
                            </tr>

                            <tr>
                                <td>Maquina 01</td>
                                <td>820,00MT</td>
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
                                <div class="imgBx"><img src="../public/img/boy.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Maputo</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../public/img/boys.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>Nampula</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../public/img/jovem.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Josia <br> <span>Quelimane</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../public/img/woman-1919143_1920.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Tunisha <br> <span>Gaza</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../public/img/rabbit-373691_1920.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Patrick <br> <span>Sofala</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../public/img/cat-551554_1920.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Eliane <br> <span>Sofala</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../public/img/brazil-1368806_640.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Eloide <br> <span>Chokwe</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../public/img/portrait-3204843_1920.jpg" alt=""></div>
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
    <script src="../public/js/menudeadm.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>