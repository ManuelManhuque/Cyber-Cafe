<?php
include_once("../db/config.php");

if (!empty($_GET['id'])) {
	$id = $_GET['id'];

	$sqlSelect = "SELECT * FROM users WHERE id=$id";
	$result = $conn->query($sqlSelect);

	if ($result->num_rows > 0) {
		while ($user_date = mysqli_fetch_assoc($result)) {
			$name = $user_date['name'];
			$email = $user_date['email'];
			$password = $user_date['password'];
			$card = $user_date['credcardnum'];
			$usertype = $user_date['usertype'];
			$category = $user_date['category'];
		}
	} else {
		$dirname = ("../views/_users.php");
		header("Location: _index.php");
	}
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../public/css/_admin.css">
	<link rel="stylesheet" href="../public/css/edit.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Edit</title>
</head>

<body>
<style>
		body {
			background-color: #13131a;
			text-align: center;
		}

		.cardHeader {
			padding-top: 2rem;
		}
	</style>
<form action="../auth/update.php" method="POST" style="margin-bottom: 2rem;">
			<div class="cardHeader2">
				<h3>Atualizar Usuario</h3>
			</div>

			<label for="name" id="al">Usuario</label> <br>
			<input class="box1" type="text" name="name" id="name" value="<?php echo $name; ?>">
			<label for="name" id="al">Email</label> <br>
			<input class="box1" type="text" name="email" id="name" value="<?php echo $email; ?>">
			<label for="name" id="al">Password</label> <br>
			<input class="box1" type="text" name="password" id="name" value="<?php echo $password; ?>">
			<label for="name" id="al">Numero de Cartao de Credito</label> <br>
			<input class="box1" type="text" name="credcardnum" id="name" value="<?php echo $card; ?>">
			<label for="name" id="al">Tipo de Usuario</label> <br>
			<input class="box1" type="text" name="usertype" id="name" value="<?php echo $usertype; ?>">
			<label for="name" id="al">Categoria</label> <br>
			<input class="box1" type="text" name="category" id="name" value="<?php echo $category; ?>">
			
			<input class="box1" type="hidden" name="id" value="<?php echo $id; ?>">
			 
					 
			<button class="btn" type="submit" name="update">Salvar</button>
		</form>

</body>

</html>