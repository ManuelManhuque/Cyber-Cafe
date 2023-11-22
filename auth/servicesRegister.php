<?php
session_start();

if (isset($_POST['submit'])) {

	// print_r($_POST);

	include_once('../db/config.php');

	$namemac = $_POST['namemac'];
	$specification = $_POST['specification'];
	$price = $_POST['price'];


	//verificar se a maquina ja existem 
	$sql = "SELECT * FROM machine WHERE name = '$namemac'";
	$result = $conn->query($sql);

	if (mysqli_num_rows($result) >= 1) { //a maquina ja existem
		$dirname = "../views/_index.php";
		header("Location: /$dirname");
	} else {
		$result = mysqli_query($conn, "INSERT INTO machine (name, specifications, price)  VALUES ('$namemac', '$specification', '$price')");
	}
	$dirname = "../views/_index.php";
	header("Location: /$dirname");
}

if (isset($_POST['request1'])) {

	// print_r($_POST);

	include_once('../db/config.php');


	$username = $_POST['username'];
	$namemac = $_POST['namemac'];
	$currentdate = date('Y-m-d');

	// print_r($username);
	// print_r($namemac);

	// //verificar se a maquina ja existem 
	$sql = "SELECT id, price FROM machine WHERE name='$namemac'";
	$idresult1 = $conn->query($sql);
	$row1 = $idresult1->fetch_assoc();
	$idmac = $row1['id'];
	// print_r($idmac);

	$sql = "SELECT id, usertype FROM users WHERE name='$username'";
	$idresult2 = $conn->query($sql);
	$row2 = $idresult2->fetch_assoc();
	$iduser = $row2['id'];
	$usertype = $row2['usertype'];
	// print_r($iduser);
	// print_r($usertype);

	if (isset($_POST['request1'])) {
		if ($usertype == "Casual") {
			$rate = 60 * 1.5 + (500 / 1024) * 2;
			$result = mysqli_query($conn, "INSERT INTO requests (id_user, id_service, id_mac, date_request, rate)  VALUES ('$iduser', '1', '$idmac','$currentdate','$rate')");
		} else {
			$rate = 60 + (500 / 1024) * 2;
			$result = mysqli_query($conn, "INSERT INTO requests (id_user, id_service, id_mac, date_request, rate)  VALUES ('$iduser', '1', '$idmac','$currentdate','$rate')");
		}

	}
	$dirname = "../views/pagamento.php";
	header("Location: /$dirname");


	if (isset($_POST['request1'])) {

		// print_r($_POST);

		include_once('../db/config.php');

		$email = $_POST['email'];
		$number = $_POST['number'];
		$cvc = $_POST['cvc'];
		$month = $_POST['month'];

		$sql = "SELECT id FROM users WHERE email='$email'";
		$idresult2 = $conn->query($sql);
		$row2 = $idresult2->fetch_assoc();
		$iduser = $row2['id'];

		$result = mysqli_query($conn, "INSERT INTO card (num, cv, month, iduser)  VALUES ('$number', '$cvc','$month', '$iduser')");

	}
}

?>