<?php
include_once("../db/config.php");




if (!empty($_GET['id'])) {
	$id = $_GET['id'];

	$sqlSelect = "SELECT * FROM machine WHERE id=$id";
	$machine = $conn->query($sqlSelect);

	if ($machine->num_rows > 0) {
		while ($user_date = mysqli_fetch_assoc($machine)) {
			$id = $user_data['id'];
			$name = $user_data['name'];
			$specifications = $user_data['specifications'];
			$price = $user_data['price'];
		}
	} else {
		$dirname = ("../views/_users.php");
		header("Location: _users.php");
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
    <style>
		body {
			background-color: #13131a;
			text-align: center;
		}

		.cardHeader {
			padding-top: 2rem;
		}
	</style>
	<title>Edit</title>
</head>

<body>





        <form action="../views/_users.php" method="POST" style="margin-bottom: 2rem;">
			<div class="cardHeader2">
				<h3>Atualizar Maquina:</h3>
			</div>

			<label for="name" id="al">Nome da Maquina</label> <br>
			<input class="box1" type="text" name="name" id="name" placeholder="Nome da maquina" value="<?php echo $name; ?>">

			<label for="name" id="al">Especificacoes</label> <br>
			<input class="box1" type="text" name="specifications" id="name" placeholder="Especificacoes" value="<?php echo $specifications; ?>">

			<label for="name" id="al">Preco</label> <br>
			<input class="box1" type="number" name="price" id="name" placeholder="Preco" value="<?php echo $price; ?>">
					 
			<button class="btn" type="submit" name="submit">Salvar</button>
		</form>

</body>

</html>