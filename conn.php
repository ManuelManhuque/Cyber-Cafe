<?php
 include_once('../db/config.php');

try {
    

	// Start a transaction to ensure both inserts are successful or neither is
	$conn -> beginTransaction();

	// Insert data into the user table
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cardnum = $_POST['cardnum'];
	$usertype = $_POST['usertype'];
	$currentdate = date("Y-m-d");
		
    $stmt = $conn->prepare("INSERT INTO categories (name, email, password, card_credit_num, usertype, year_assoc_num) 
// 							VALUES (:username, :email, :password, :cardnum, :usertype, :currentdate)");
	$stmt->bindParam(':username', $username);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':password', $password);
	$stmt->bindParam(':cardnum', $cardnum);
	$stmt->bindParam(':usertype', $usertype);
	$stmt->bindParam(':currentdate', $currentdate);
    $stmt->execute();

// 	// Get the auto-generated ID from the categories table insert
	$userID= $conn->lastInsertId();
	
// 	// Insert data into the products table with the categories reference
    $productName = "Smartphone";
    $productPrice = 499.99;
    $stmt = $conn->prepare("INSERT INTO products (category_id, name, price) VALUES (:categoryId, :productName, :productPrice)");
    $stmt->bindParam(':categoryId', $categoryId);
    $stmt->bindParam(':productName', $productName);
    $stmt->bindParam(':productPrice', $productPrice);
    $stmt->execute();

} catch (PDOException $e) {
	//Rollback the transaction if there's an error
    $conn->rollback();
    echo "Error: " . $e->getMessage();
}
?>