<?php
    if(isset($_POST['submit'])){
        // print_r($_POST['nome']);
        // print_r($_POST['email']); teste de vizualizacao na tela
        // print_r($_POST['senha']);

        include_once('../INTERFACES/funcoes_php/config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senhaHash'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senhaHash)  VALUES('$nome', '$email', '$senha')");
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
    <link rel="stylesheet" href="../../CSS/payment.css">

    <link rel="shortcut icon" href="../../ILUSTRACOES/logo.png" type="image/x-icon">

</head>

<body>

    <form action="action">
        <h1><b>Reserva</b></h1>

        <label for="name">Nome do Cliente</label> <br>
        <input class="box1" type="text" name="nome" id="name" placeholder="Digite o se Nome">

        <label for="cardnum">Cartão de identidade</label><br>
        <input class="box1" type="number" name="number" id="number" placeholder="xxxxxxxx xxxx"><br>

        <label for="cardnum"> Entidade</label><br>
        <input class="box1" type="number" name="number" id="number" placeholder="xxxxxxxx xxxx"><br>

        <label for="cardnum">Serviços a serem instalados no Computador</label><br>
        <input class="box1" type="text" name="number" id="number" placeholder="Ex: MS OFFICE"><br>

        <div class="div01">
            <label class="lele" for="cardx">Hora</label><br>
            <input class="box2" type="time" name="month" id="month" placeholder="MM"><br>
        </div>
        <div class="div01">
            <label class="lele" for="cardx">Mes/Dia</label><br>
            <input class="box2" type="month" name="month" id="month" placeholder="MM"><br>
        </div>

        <div class="div01">
            <label class="lele" for="cardye">Ano</label><br>
            <input class="box2" type="year" name="year" id="year" placeholder="AAAA"><br>
        </div>


        <button class="btn" type="button"><a href="javascript:void (0)"
                onclick="history.go (-1); return false;">Voltar</a></button>
        <button class="btn" type="button"><a href="../service/pagamento.php">Reservar</a></button>
    </form>
</body>

</html>