<?php
session_start();
include_once("../db/config.php");

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSIOM['password']) == true)) {

	$dirname = "../views/login.php";

	unset($_SESSION['email']);
	unset($_SESSION['password']);
	header("Location: /$dirname");
}
$logged = $_SESSION['email'];

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
$startDateMemberShip = $row['startdatemembership'];

$currentDate = new DateTime(); // Data atual
$startDate = new DateTime($startDateMemberShip); // Data de início da associação
$interval = $currentDate->diff($startDate);
$days = $interval->days;

$sql = "SELECT name FROM users WHERE email = '$logged'";
$resultuser = $conn->query($sql);

if ($resultuser->num_rows > 0) {
    $row = $resultuser->fetch_assoc();
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<title class="title">Cyber Cafe: Lion's Gate</title>
	<!-- ======= Styles ====== -->
	<link rel="stylesheet" href="../public/css/_admin.css">
	<link rel="stylesheet" href="../public/css/user_List.css">
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
					<a href="../views/_index.php">
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

		<div class="cardHeader">
			<h2>Listagem de Usuarios:</h2>
			<div class="table-container">
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
						<th scope="col">Membro desde</th>
						<th scope="col">Ações</th>
					</tr>
				</thead>
				<tbody>

					<?php

					while ($user_data = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" . $user_data['id'] . "</td>";
						echo "<td>" . $user_data['name'] . "</td>";
						echo "<td>" . $user_data['email'] . "</td>";
						echo "<td>" . $user_data['password'] . "</td>";
						echo "<td>" . $user_data['credcardnum'] . "</td>";
						echo "<td>" . $days . " dias " ."</td>";
						echo "<td>" . $user_data['usertype'] . "</td>";
						echo "<td>" . $user_data['category'] . "</td>";
						echo "<td>" . $user_data['startdatemembership'] . "</td>";
						echo
							"<td>
                        <a class='actions' href='../views/edit.php?id=$user_data[id]'>
                        <i class='fas fa-edit'></i></a>
                        <a class='actions' href='../db/delete.php?id=$user_data[id]'><i class='fas fa-trash-alt'></i></a>
                        </td>";
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
			</div>
		</div>
		


		
		<div class="cardHeader">
			<h2>Listagem de Maquinas:</h2>
			<div class="table-container">
			<table>
				<thead>
					<tr>
						<th scope="col">id</th>
						<th scope="col">name</th>
						<th scope="col">specifications</th>
						<th scope="col">price</th>
						<th scope="col">Ações</th>
						
					</tr>
				</thead>
				<tbody>

					<?php
					
						$sql = "SELECT * FROM machine";
						$machine = $conn->query($sql);
					while ($user_data = mysqli_fetch_assoc($machine)) {
						echo "<tr>";
						echo "<td>" . $user_data['id'] . "</td>";
						echo "<td>" . $user_data['name'] . "</td>";
						echo "<td>" . $user_data['specifications'] . "</td>";
						echo "<td>" . $user_data['price'] . "</td>";
						echo
							"<td>
                        <a class='actions' href='../views/edit_mac.php?id=$user_data[id]'>
                        <i class='fas fa-edit'></i></a>
                        <a class='actions' href='../views/delete_mac.php?id=$user_data[id]'><i class='fas fa-trash-alt'></i></a>
                        </td>";
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
			</div>
		</div>



		<div class="cardHeader">
			<h2>Listagem de Serviços:</h2>
			<div class="table-container">
			<table>
				<thead>
					<tr>
						<th scope="col">id</th>
						<th scope="col">serviceType</th>
						<th scope="col">Ações</th>
											
					</tr>
				</thead>
				<tbody>

					<?php
					$sql = "SELECT * FROM services";
					$services = $conn->query($sql);

					while ($user_data = mysqli_fetch_assoc($services)) {
						echo "<tr>";
						echo "<td>" . $user_data['id'] . "</td>";
						echo "<td>" . $user_data['serviceType'] . "</td>";
						echo
							"<td>
                       
                        <a class='actions' href='../views/delete_serv.php?id=$user_data[id]'><i class='fas fa-trash-alt'></i></a>
                        </td>";
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
			</div>
		</div>


		<div class="cardHeader">
			<h2>Listagem de Produto:</h2>
			<div class="table-container">
			<table>
				<thead>
					<tr>
						<th scope="col">id</th>
						<th scope="col">Nome</th>
						<th scope="col">Preco</th>
						<th scope="col">Ações</th>
											
					</tr>
				</thead>
				<tbody>

					<?php
						$sql = "SELECT * FROM produto";
						$produto = $conn->query($sql);
					while ($user_data = mysqli_fetch_assoc($produto)) {
						echo "<tr>";
						echo "<td>" . $user_data['id'] . "</td>";
						echo "<td>" . $user_data['name_prod'] . "</td>";
						echo "<td>" . $user_data['price_prod'] . "</td>";
						echo
							"<td>
                        
                        <a class='actions' href='../views/delete_prod.php?id=$user_data[id]'><i class='fas fa-trash-alt'></i></a>
                        </td>";
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
			</div>
		</div>


		<div class="cardHeader">
			<h2>Listagem de Requisicoes:</h2>
			<div class="table-container">
			<table>
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">ID do Usuario</th>
						<th scope="col">ID do Servico</th>
						<th scope="col">ID da Maquina</th>
						<th scope="col">Data da Requisicao</th>
						<th scope="col">Preco Final</th>
						<th scope="col">Quantidade de Quilobyte</th>
						<th scope="col">Ações</th>
											
					</tr>
				</thead>
				<tbody>

					<?php
						$sql = "SELECT * FROM requests";
						$requests = $conn->query($sql);
					while ($user_data = mysqli_fetch_assoc($requests)) {
						echo "<tr>";
						echo "<td>" . $user_data['id'] . "</td>";
						echo "<td>" . $user_data['id_user'] . "</td>";
						echo "<td>" . $user_data['id_service'] . "</td>";
						echo "<td>" . $user_data['id_mac'] . "</td>";
						echo "<td>" . $user_data['date_request'] . "</td>";
						echo "<td>" . $user_data['rate'] . "</td>";
						echo "<td>" . $user_data['kb'] . "</td>";
						echo
							"<td>
                        
                        <a class='actions' href='../views/delete_req.php?id=$user_data[id]'><i class='fas fa-trash-alt'></i></a>
                        </td>";
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
			</div>
		</div>
	</div>



	</div>


</body>

</html>




<!-- =========== Scripts =========  -->
<script src="../public/js/menudeadm.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>