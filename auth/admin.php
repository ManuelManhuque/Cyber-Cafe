<?php
	// session_start();

	// if ((!isset($_SESSION['email']) == true) and (!isset ($_SESSIOM['password']) == true)) {
		
	// 	$dirname = "../views/login.php";

	// 	unset($_SESSION['email']); 
	// 	unset($_SESSION['password']);
	// 	header("Location: /$dirname"); 
	// }
	// $logged = $_SESSION['email'];

    if(isset($_POST['submitmac'])){
        // print_r($_POST['name']);

        include_once('../db/config.php');

		$name = $_POST['name'];
		$waittime = $_POST['waittime'];

		$sql = "SELECT * FROM availablemachines WHERE name = '$name'";
		$result = $conn->query ($sql); 
		// print_r($result);
		if(mysqli_num_rows($result) >= 1) {  //verificar se existem um dado igual na db
			$dirname = "../views/_product.php";
			header("Location: /$dirname"); 
		} else {
			
			$result = mysqli_query($conn, "INSERT INTO availablemachines (IsAvailable, name, WaitTime)  
													VALUES('1', '$name', '$waittime' )");
			$dirname = "../views/_product.php";
			header("Location: /$dirname"); 
		}
       
    }

// -----------------------------------------------cadastro acaba aqui---------------------


// -----------------------------------------------login comeca aqui---------------------

	// if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])){

	// 	include_once('../db/config.php');

	// 	$email = $_POST['email']; 
	// 	$password = $_POST['password'];

	// 	$sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
	// 	$result = $conn->query ($sql); 
	// 	//print_r($result);

	// 	if(mysqli_num_rows($result) < 1){  //erase datas from browser 
	// 		$dirname = "../views/login.php";

	// 		unset($_SESSION['email']);
	// 		unset($_SESSION['password']);
	// 		header("Location: /$dirname"); 
		
	// 	} else {
	// 		$dirname = "../views/_index.php";
			
	// 		$_SESSION['email'] = $email;
	// 		$_SESSION['password'] = $password;
	// 		header("Location: /$dirname");
	// 	}

	// } else{
	// 	header('Location: login.php');
	// }
	


// -----------------------------------------------login acaba aqui---------------------




?>


