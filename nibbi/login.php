<?php
session_start();

//conectar no banco de dados
include("conexao.php");

//obter os dados do formulário
@$email = $_POST["email"];
@$password = $_POST["password"];

if (isset($_POST["email"])) {
    $email = addslashes(trim($_POST["email"]));
}

if (isset($_POST["password"])) {
    $password = md5(trim($_POST["password"]));
}

//validar o usuário no BD
$sql = "SELECT * FROM 'cadastro' WHERE email='$email' AND password='$password'";

// $result = $con->query($sql);

// $total_de_usuarios = $result->num_rows;

// if ($total_de_usuarios == 1) {
//     $dados = $result->fetch_assoc();

//     //salva os dados na sessão
//     $_SESSION["email"] = $dados["email"];
//     $_SESSION["password"] = $dados["password"];

//     //redirecionar para a página restrita
//     header("Location: joias.php");
//     exit;
// } else {
//     echo "<p>Usuário não encontrado</p>";
//     echo "<a href=\"index.php\">Voltar</a>";
// }

?>
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