




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../public/img/logo.png" type="image/x-icon">
	<title>Cyber Cafe: Lion's Gate</title>
	<!-- ======= Styles ====== -->
	<link rel="stylesheet" href="../public/css/_admin.css">
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
					<a href="../views/_index.php">
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






				<!-- <li>
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
			<h2>Adicionar:</h2>
		</div>

		<!-- 
		<form  action="../auth/servicesRegister.php" method="POST" >
			<div class="cardHeader2">
				<h3 style="font-weight: 700;">Formulario do Admin:</h3>
			</div>

			<label for="name" id="al">Nome do Usuario</label> <br>
			<input class="box1" type="text" name="name" id="name" placeholder="Nome do Usuario" required>
			<label for="name" class="al">Tipo de Usuario</label> <br>
			<select id="user_type" name="user_type">
				<option value="Member">Member</option>
				<option value="Casual">Casual</option>
			</select><br><br>

			<label for="name" class="al">Numero de Cartao de Credito</label> <br>
			<input class="box1" type="text" id="credit_card" name="credit_card"
				placeholder="Digite o nome do Computador" required>

			<label for="name">Maquina a atribuir</label> <br>
			<input class="box1" type="text" id="assigned_machine" name="assigned_machine" required>

			<label for="years_of_membership">Numero de Anos</label> <br>
			<input class="box1" type="text" id="years_of_membership" name="years_of_membership">

			<label for="category">Categoria</label> <br>
			<select id="category" name="category">
				<option value="Bronze">Bronze</option>
				<option value="Silver">Silver</option>
				<option value="Gold">Gold</option>
			</select><br><br>

			<label for="service_type">Tipos de Serviços:</label>
			<select id="service_type" name="service_type">
				<option value="Navigation">Navegacao</option>
				<option value="Cafeteria">Cafeteria</option>
				<option value="Burning">Burning</option>
				<option value="Printing">Impressao</option>
			</select><br><br>

			<label for="start_time">Start Time:</label>
			<input type="datetime-local" id="start_time" name="start_time" required><br><br>

			<label for="end_time">End Time:</label>
			<input type="datetime-local" id="end_time" name="end_time" required><br><br>

			<label for="downloaded_kbytes">Kbytes baixados:</label>
			<input type="number" id="downloaded_kbytes" name="downloaded_kbytes"><br><br>

			<label for="dish_number">Dish Number:</label>
			<input type="number" id="dish_number" name="dish_number"><br><br>

			<label for="burning_speed">Burning Speed:</label>
			<select id="burning_speed" name="burning_speed">
				<option value="8x">8x</option>
				<option value="12x">12x</option>
				<option value="16x">16x</option>
				<option value="24x">24x</option>
			</select><br><br>

			<label for="info_amount_mbytes">Information Amount (Mbytes):</label>
			<input type="number" id="info_amount_mbytes" name="info_amount_mbytes"><br><br>


			<button class="btn" type="submit" name="submit"><a href="#">Adicionar</a></button>
		</form> -->



        <?php
if(isset($_POST['submit'])){
	
	include_once('../db/config.php');
	$name = $_POST['name_prod'];
	$price = $_POST['price_prod'];

	$prod = mysqli_query($conn, "INSERT INTO produto(name_prod, price_prod) VALUES ('$name', '$price')");
}
?>
		<form action="../auth/add_produto.php" method="POST" style="margin-bottom: 2rem;">
			<div class="cardHeader2">
				<h3>Produto:</h3>
			</div>

			<label for="name" id="al">Nome do Produto</label> <br>
			<input class="box1" type="text" name="name_prod" id="name" placeholder="Nome do Produto	">

			<label for="name" id="al">Preco</label> <br>
			<input class="box1" type="number" name="price_prod" id="name" placeholder="Preco">

					 
			<button class="btn" type="submit" name="submit">Adicionar</button>
		</form>




		





		









		<!-- =========== Scripts =========  -->
		<script src="../public/js/menudeadm.js"></script>

		<!-- ====== ionicons ======= -->
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>