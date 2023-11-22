<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Cafe: Lion's Gate</title>


    <!-- link para icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- link para a folha de estilizacao -->

    <link rel="stylesheet" href="../public/css/login.css">

    <link rel="shortcut icon" href="../public/img/logo.png" type="image/x-icon">
</head>

<body>


    <!-- comeco do header -->
    <header class="header">
        <!-- logotipo vem aqui -->
        <!-- e a ref retornara a pag main -->
        <a href="../index.php" class="logo">
            <img src="../public/img/logo.png">
        </a>

        <nav class="navbar" class="lin">
            <a href="../views/services.php">Serviços</a>
            <a href="#">Login</a>
            <a href="../views/contact.php">Contactos</a>
            <a href="../views/about_us.php">Sobre Nós</a>
        </nav>

        <div class="icons">

            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>




    </header>

    <!-- para aba de login vamos usar cont em vez de container
    cont -->
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="../auth/auth_login.php" method="POST">
                <h1 class="a">Criar uma nova conta</h1>
                <div class="social-icons" id="c">
                    <a href="#" class="icon"><i class="fa-regular fa-envelope"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
                <span class="a">Ou utilize o seu Email e Palavra passe</span>
                <input type="text" placeholder="Name" name="name" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Palavra passe" name="password" required>
				<div class="membership">
					<input type="checkbox" value="1" name="usertype" >
					<label for="">Quero me tornar membro</label>
				</div>
							
				<button class="btn" name="register" class="a">Registrar</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="../auth/auth_login.php" method="POST">
                <h1 class="a" >Entrar</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-regular fa-envelope"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
                <span class="a">Ou utilize o seu Email e Palavra passe</span>
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Palavra passe" name="password">
                <a href="#" id="c">Esqueceu a sua palavra Passe?</a>
                <button class="btn" name="login" class="a">Entrar</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1 style="font-weight: bold; color: #fff;">Seja bem Vindo(a)!</h1>
                    <p>Introduza seus dados para o acesso a todas funcionalidades do Site</p>
                    <button class="hidden" id="login" id="c">Entrar</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1 class="a">Olá, Amigo(a)!</h1>
                    <p>Faças o registro para para navegares a vontade no nosso Site</p>
                    <button class="hidden" id="register" class="btn">Registrar</button>
                </div>
            </div>
        </div>
    </div>


    <script>

const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

    </script>

    <script src="../JS/comportamento.js"></script>
</body>

</html>