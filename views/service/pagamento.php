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
        <h1>Pagamentos</h1>

        <label for="name">Nome do Cliente</label> <br>
        <input class="box1" type="text" name="name" id="name" placeholder="Digite o seu Nome">

        <label for="Pemail">Email</label><br>
        <input class="box1" type="email" name="email" id="email" placeholder="Introduza o seu Email"><br>
        <label for="cardnum">Numero do Cartao</label><br>
        <input class="box1" type="number" name="number" id="number" placeholder="xxxx xxxx xxxx xxxx"><br>

        <div class="div1">
            <label class="lele" for="cardx">Validade: Mes</label><br>
            <input class="box2" type="month" name="month" id="month" placeholder="MM"><br>
        </div>

        <div class="div1">
            <label class="lele" for="cardye">Ano</label><br>
            <input class="box2" type="year" name="year" id="year" placeholder="AAAA"><br>
        </div>

        <div class="div1">
            <label class="lele" for="cardCVC">CVC</label><br>
            <input class="box2" type="cvc" name="cvc" id="CVC" placeholder="cvc">
        </div>

        <button class="btn" type="button"><a href="javascript:void (0)"
                onclick="history.go (-1); return false;">Voltar</a></button>
        <button class="btn" type="button">Pagar</button>
    </form>

</body>

</html>