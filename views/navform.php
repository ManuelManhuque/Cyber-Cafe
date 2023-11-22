<?php
session_start();

$email = isset($_SESSION['email']) ? $_SESSION['email'] : null;

if (!empty($email)) {
    include_once($_SERVER['DOCUMENT_ROOT'] . '/db/config.php');

    // Retrieve username from the database based on the email
    $sql = "SELECT name FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $username = $row['name'];
    } else {
        // Handle the case where the user is not found in the database
        $username = "User Not Found";
    }
} else {
    // Handle the case where $_SESSION['email'] is not set or empty
    $username = "Guest";
}
//verificar se uma maquina na tabela request
$sql = "SELECT id, name FROM machine";
$idresult = $conn->query($sql);
$row = $idresult->fetch_assoc();
$id = $row['id'];

$sql = "SELECT id FROM requests WHERE id='$id'";
$idresult2 = $conn->query($sql);


if (mysqli_num_rows($idresult2) < 1) {
    $namemac = $row['name'];
}else {
    $namemac = $row['name'];
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Cafe: Lion's Gate</title>


    <!-- link para icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- link para a folha de estilizacao -->
    <link rel="stylesheet" href="../public/css/payment.css">

    <link rel="shortcut icon" href="../public/img/logo.png" type="image/x-icon">

</head>

<body>

    <form action="../auth/servicesRegister.php" method="post" id="form1">
        <h1><b>Reserva</b></h1>

        <label for="name">Nome do Cliente</label> <br>
        <input class="box1" type="text" name="username" id="name" value="<?php echo $username; ?>">

        <label for="cardnum">Nome da Maquina</label><br>
        <input class="box1" type="text" name="namemac" id="number" value="<?php echo $namemac; ?>"><br>
 
        <button class="btn" type="button">Voltar</button>

        <button class="btn" type="submit" name="request1">Continuar</button>
    
    </form>
    <script>
    document.getElementById("form1").addEventListener("request1", function() {
        // Add code to submit the second form
        window.location.href = "../views/pagamento.php";
    });
</script>
</body>

</html>