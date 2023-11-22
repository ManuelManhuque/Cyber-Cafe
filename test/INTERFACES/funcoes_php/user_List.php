<?php
    session_start();
    @include_once('Public/php_db/connect.php');

    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
        header('Location: user_list.php');
    }
    // unset($_SESSION['email']);
    // unset($_SESSION['senha']);
    // $Logado = $_SESSION['email'];
    $sql = "SELECT * FROM Users ORDER BY id_usuario";

    $result = $conn->query($sql);

    
?>  


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/css/user_List.css">
    <link rel="stylesheet" href="Public/css/menuGest.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Tabela CRUD</title>

</head>
<body>
        <!-- NavBar section -->
        <nav>
        <label class="logo">Zoológico</label>
        <ul>
            <li><a class="#active" href="index.php">Home</a></li>
        </ul>
    </nav>
    <h1>Centro de Gestão de Parque Zoológico</h1>

    <div class="conteiner">

        <aside class="sidebar">
            <div class="logo">
                <h2>Zoológico</h2>
            </div>

            <ul>
                <h3>Cadastro</h3>
                <li><a href="menuGestor.php #form">Adicionar de Especies </a></li>

                <h3>Gestão</h3>
                <li><a href="user_list.php">Listar Usuarios</a></li>
                <li><a href="list_Especie.php">Listar espécies</a></li>
            </ul>
        </aside>

        <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Senha</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>

        <?php
            while($user_data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>".$user_data['id_usuario']."</td>";
                echo "<td>".$user_data['name_user']."</td>";
                echo "<td>".$user_data['email']."</td>";
                echo "<td>".$user_data['senha']."</td>";
                echo 
                "<td>
                        <a class='actions' href='edit.php?id=$user_data[id_usuario]'>
                        <i class='fas fa-edit'></i></a>
                        <a class='actions' href='delete.php?id=$user_data[id_usuario]'><i class='fas fa-trash-alt'></i></a>
                        </td>";
                echo "</tr>";
            }
        ?>
        </tbody>
        </table>
        
    </div>

</body>
</html>
