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
        <input class="box1" type="text" name="name" id="name" placeholder="Digite o se Nome">

        <label for="cardnum">Numero da Maquina</label><br>
        <input class="box1" type="text" name="number" id="number" placeholder="Ex: Maquina 01, 02..."><br>

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