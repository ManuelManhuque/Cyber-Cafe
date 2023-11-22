<?php
session_start();
include("../../INTERFACES/funcoes_php/config.php");

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senhaHash']) == true)) {
    // header('Location: USUARIOS.php');
}
// unset($_SESSION['email']);
// unset($_SESSION['senha']);
// $Logado = $_SESSION['email'];
$sql = "SELECT * FROM usuarios ORDER BY id";

$result = $conexao->query($sql);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../ILUSTRACOES/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Cyber Cafe: Lion's Gate</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../../CSS/menuDeADM.css">
    <link rel="stylesheet" href="../../CSS/user_List.css">
    <style>
        body {
            background-color: #13131a;
            text-align: center;
        }

        .cardHeader {
            padding-top: 2rem;
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
                    <a href="#">
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
            <h2>Listagem de Usuarios:</h2>
            <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Senha</th>
                <th scope="col">Nr do Cartao</th>
                <th scope="col">Anos de Associado</th>
                <th scope="col">Tipo de User</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>

            <?php
            while ($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['id'] . "</td>";
                echo "<td>" . $user_data['nome'] . "</td>";
                echo "<td>" . $user_data['email'] . "</td>";
                echo "<td>" . $user_data['senhaHash'] . "</td>";
                echo "<td>" . $user_data['numero_cartao_credito'] . "</td>";
                echo "<td>" . $user_data['anos_associado'] . "</td>";
                echo "<td>" . $user_data['usertype_id'] . "</td>";
                echo "<td>" . $user_data['categoria'] . "</td>";
                echo
                "<td>
                        <a class='actions' href='../../INTERFACES/funcoes_php/edit.php?id=$user_data[id]'>
                        <i class='fas fa-edit'></i></a>
                        <a class='actions' href='../../INTERFACES/funcoes_php/delete.php?id=$user_data[id]'><i class='fas fa-trash-alt'></i></a>
                        </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

        </div>
    </div>



    </div>


</body>

</html>




<!-- =========== Scripts =========  -->
<script src="../../JS/menudeadm.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>