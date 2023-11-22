<?php

	session_start();
	unset($_SESSION['email']);
	unset($_SESSION['password']);
	// Destroy the session
    session_destroy();

	$dirname = "index.php";
	header("Location: /$dirname");
?>