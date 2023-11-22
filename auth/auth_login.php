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
			$category = 0;
		} else {
			$usertype = 1;
			$category = 1;
		}
		if ($name != "Admin") {
			$stm = mysqli_query($conn, "INSERT INTO users (name, email, password, usertype, category, startdatemembership)  VALUES ('$name', '$email', '$password', '$usertype', '$category', '$currentdate')");
		} else {
			$stm = mysqli_query($conn, "INSERT INTO users (name, email, password, startdatemembership)  VALUES ('$name', '$email', '$password', '$currentdate')");

			if ($stm) {
				$name = "admin";
				$lastUserID = mysqli_insert_id($conn);
				$stm = mysqli_query($conn, "INSERT INTO roles (name, iduser)  VALUES ('$name', '$lastUserID')");
				$dirname = "../views/_index.php";
				header("Location: /$dirname");
			}
		}


	}

	$dirname = "index.php";
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
	$data = $result->fetch_assoc();
	$username = $data['name'];
	//print_r($result);

	if (mysqli_num_rows($result) < 1) { //erase datas from browser 
		$dirname = "../views/login.php";
		unset($_SESSION['email']);
		unset($_SESSION['password']);
		header("Location: /$dirname");

	} else if ($username == "Admin") {
		$dirname = "../views/_index.php";
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
		header("Location: /$dirname");
	} else {
		$dirname = "index.php";
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
		header("Location: /$dirname");
	}

} else {
	$dirname = "../views/login.php";
	unset($_SESSION['email']);
	unset($_SESSION['password']);
	header("Location: /$dirname");
}



// -----------------------------------------------login acaba aqui---------------------
?>