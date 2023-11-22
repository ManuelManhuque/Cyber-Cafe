<?php

include_once("../db/config.php");

if (isset($_POST['update'])) {
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];
    $credcardnum = $_POST['credcardnum']; 
    $category = $_POST['category'];

    $sqlUpdate = "UPDATE users SET name='$name', email='$email', password='$password', usertype='$usertype', category='$category', credcardnum='$credcardnum' WHERE id='$id'"; 

    $result = $conn->query($sqlUpdate);
}

$dirname = "../views/_users.php";
header("Location: /$dirname");


if (isset($_POST['update'])) {
    
    $iden = $user_data['id'];
    $nome_maq = $user_data['name'];
    $espec = $user_data['specifications'];
    $prec = $user_data['price'];

    $sqlUpdate = "UPDATE machine SET nome_maq='$name',  espec='$specifications', prec='$price' WHERE id='$id'"; 

    $machine = $conn->query($sqlUpdate);
}

$dirname = "../views/_users.php";
header("Location: /$dirname");


?>