<?php

session_start();
include_once("../db/config.php");

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSIOM['password']) == true)) {

    $dirname = "../views/login.php";

    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header("Location: /$dirname");
}
$logged = $_SESSION['email'];

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
$startDateMemberShip = $row['startdatemembership'];

$currentDate = new DateTime(); // Data atual
$startDate = new DateTime($startDateMemberShip); // Data de início da associação
$interval = $currentDate->diff($startDate);
$days = $interval->days;

$sql = "SELECT name FROM users WHERE email = '$logged'";
$resultuser = $conn->query($sql);

if ($resultuser->num_rows > 0) {
    $row = $resultuser->fetch_assoc();
    $username = $row["name"];
} else {
    $username = "User not found";
}
?>