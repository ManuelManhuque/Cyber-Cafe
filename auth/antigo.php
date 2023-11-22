<?php
session_start();

if (isset($_POST['register'])) {

	// print_r($_POST);


	include_once('../db/config.php');

	$name = $_POST['name'];
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$password = $_POST['password'];
	$usertype = filter_input(INPUT_POST, 'usertype', FILTER_VALIDATE_BOOL);
	$currentdate = date('Y-m-d');

	 
	//verificar se o usuario ja existem 
	$sql = "SELECT * FROM users WHERE email = '$email'";
	$result = $conn->query($sql);


	if (mysqli_num_rows($result) >= 1) { //usuario ja existem
		$dirname = "../views/login.php";
		header("Location: /$dirname");

	} else { //caso nao 
		if (!$usertype) {
			$usertype = 2;
			$category = "";
			
		} else {
			$usertype = 1;
			$category = 1;
		}
		// atribuir uma maquina ao usuario por padrao -- maquina 1

		$sql = "SELECT id_mac FROM requests";
		$result = $conn->query($sql);
		//print_r($result);
		$sql = "SELECT id FROM availablemachines";
			$idresult = $conn->query($sql);
			$row = $idresult->fetch_assoc();
			$id = $row['id'];

		if (mysqli_num_rows($result) < 1 && mysqli_num_rows($idmac) >= 1) {
			 
			$result = mysqli_query($conn, "INSERT INTO users (name, email, password, usertype, credcardnum, category, startdatemembership)  VALUES ('$name', '$email', '$password', '$usertype', '$cardnum', '$category', '$currentdate')");
			
			$lastUserID = 0; //levar o ultimo id do usuario que foi inserido
			if ($result) {
				$date_req = date("Y-m-d H:i:s");
				$lastUserID = mysqli_insert_id($conn);
				//inserir dados da requisicao. 
				$stm = mysqli_query($conn, "INSERT INTO requests (id_user, id_mac, date_req) VALUES ('$lastUserID', '$id', '$date_req') ");
			}

		} else {
			// Consulta SQL para a primeira tabela
			$sql1 = "SELECT id FROM availablemachines";
			$result1 = mysqli_query($conn, $sql1);

			// Consulta SQL para a segunda tabela
			$sql2 = "SELECT id_mac FROM requests";
			$result2 = mysqli_query($conn, $sql2);

			if ($result1 && $result2) {
				// Coleta os resultados em arrays
				$array1 = [];
				$array2 = [];
				$aux = [];

				//extraindo a data de requisicao
				$sql = "SELECT date_req FROM requests";
				$array = $conn->query($sql);
				$row = $array->fetch_assoc();
				$date = $row['date_req'];
				// Converte a string em um objeto DateTime
				$dateTime = new DateTime($date);
				$hrMinSec = substr($date, 11, 8);

				// Extrai a data e hora
				$dat = $dateTime->format('Y-m-d'); // Formato 'YYYY-MM-DD'
				//$hr = $dateTime->format('H:i:s'); // Formato 'HH:MM:SS'

				// Hora da requisição (obtida do banco de dados da consulta anterior)
				$hrrequest = strtotime($hrMinSec);

				// Hora que o usuário precisa (pode ser obtida do banco de dados ou outra fonte)
				$timecount = strtotime('01:00:00');

				// Calcula a diferença em minutos
				$diffMin = round(($timecount - $hrrequest) / 60);
				//$diffMinAt = round(($timecount - $hr) / 60);

				while ($row1 = mysqli_fetch_assoc($result1)) {
					$array1[] = $row1;
				}
				while ($row2 = mysqli_fetch_assoc($result2)) {
					$array2[] = $row2;
				}

				for ($i = 0; $i < count($array2); $i++) {
					for ($j = 0; $j < count($array1); $j++) {
						if ($array2[$i]['id_mac'] == $array1[$j]['id'] && $dat == $currentdate && $diffMin >= 0 && $diffMin <= 60) {
							$aux[] = $array1[$i]['id'];
							//echo "Maquina indisponivel. Espere por" . $diffMinAt . "min";
							//&& $diffMin >= 0 && $diffMin <= 60
							 if($array1[$i]['id'] == end($array1)) {
								if ($diffMin > 0) {
									for ($i = $diffMin; $i >= 0; $i--) {
										// echo "Tempo restante: " . $i . " minutos<br>";
										sleep(60); // Aguarda 60 segundos (equivalente a 1 minuto)
									}
									echo "Tempo esgotado!";
								} else {
									echo "Tempo esgotado!";
								}
							 }

						} else {
							$sql = "SELECT * FROM users WHERE email = '$email'";
							$result = $conn->query($sql);

							if (mysqli_num_rows($result) >= 1) { //usuario ja existem
								break;

							} else { //caso nao 
								$idmac = $array1[$j]['id']; //id da maquina aleatoria

								if (!$usertype) {
									$usertype = 2;
									
									$result = mysqli_query($conn, "INSERT INTO users (name, email, password, usertype, creditcardnumber, startdatemembership)  VALUES ('$name', '$email', '$password', '$usertype', '$cardnum', '$currentdate')");
								} else {
									$usertype = "";
									$category = 1;
									$result = mysqli_query($conn, "INSERT INTO users (name, email, password, usertype, creditcardnumber, category, startdatemembership)  VALUES ('$name', '$email', '$password', '$usertype', '$cardnum', '$category', '$currentdate')");
								}
							
								$lastUserID = 0;  
								if ($result) {
									$date_req = date("Y-m-d H:i:s");
									$lastUserID = mysqli_insert_id($conn);

									$stm = mysqli_query($conn, "INSERT INTO requests (id_user, id_mac, date_req) VALUES ('$lastUserID', '$idmac', '$date_req') ");
								}

							}
							break;
						}
					}
				}
			}

 



		}


	}
	$dirname = "../views/login.php";
	header("Location: /$dirname");


 }

// -----------------------------------------------cadastro acaba aqui---------------------


// -----------------------------------------------login comeca aqui---------------------

if (isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password'])) {

	include_once('../db/config.php');

	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
	$result = $conn->query($sql);
	//print_r($result);

	if(mysqli_num_rows($result) < 1){  //erase datas from browser 
		$dirname = "../views/login.php";
		unset($_SESSION['email']);
		unset($_SESSION['password']);
		header("Location: /$dirname"); 

	} else {
		$dirname = "../views/_index.php";
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
		header("Location: /$dirname"); 
	}

} else {
// 	header('Location: login.php');
}



// -----------------------------------------------login acaba aqui---------------------
?>