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

    <link rel="shortcut icon" href="../views/img/logo.png" type="image/x-icon">

</head>

<body>

    <form action="../auth/servicesRegister.php" method="POST">
        <h1>Pagamentos</h1>

        <label for="name">Nome do Cliente</label> <br>
        <input class="box1" type="text" name="username" id="name" value="<?php echo $username ?>">

        <label for="Pemail">Email</label><br>
        <input class="box1" type="email" name="email" id="email" value="<?php echo $email ?>"><br>

        <label for="cardnum">Numero do Cartao</label><br>
        <input class="box1" type="number" name="card" id="number" placeholder="xxxx xxxx xxxx xxxx"><br>

        <div class="div1">
            <label class="lele" for="cardx">Validade: Mes</label><br>
            <input class="box2" type="month" name="month" id="month"><br>
        </div>

        <!-- <div class="div1">
            <label class="lele" for="cardye">Ano</label><br>
            <input class="box2" type="year" name="year" id="year" placeholder="AAAA"><br>
        </div> -->

        <div class="div1">
            <label class="lele" for="cardCVC">CVC</label><br>
            <input class="box2" type="cvc" name="cvc" id="CVC" placeholder="cvc">
        </div>

        <button class="btn" type="button"><a style="
    background: transparent;" href="javascript:void (0)" onclick="history.go (-1); return false;">Voltar</a></button>

        <button class="btn" type="submit" name="request2"><a style="background: transparent;" href="javascript:void (0)" onclick="history.go (-2); return false;">Confirmar</a></button>
    </form>

</body>

</html>