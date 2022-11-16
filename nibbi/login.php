<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style1.css">
    <title> Nibbi </title>
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicons/grandelogo.png">
</head>

<body>
    <div>
        <img src="./assets/images/teste2.png" class="img-fluid">
    </div>
    <main class="container">
        <h2>Login</h2>
        <form action="testeLogin.php" method="POST">
            <div class="input-field">
                <input type="text" name="email" id="email" placeholder="E-mail">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="password" name="password" id="password" placeholder="Senha">
                <div class="underline"></div>
            </div>
            <div class="continue-button">
                <button><a href="sistema.php">Entrar</a></button>
            </div>

            <div class="footer">
                </br>
                <span> Não possui um cadastro? </span>
            </div>
            <div class="continue-button">
                <button><a href="cadastro.php">Cadastrar</a></button>
            </div>
        </form>
    </main>
    </div>
</body>

</html>