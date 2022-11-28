<?php
session_start();

//conectar no banco de dados
include("conexao.php");

//obter os dados do formulário
$login = "";
$senha = "";

if (isset($_POST["email"])) {
    $login = addslashes(trim($_POST["email"]));
}

if (isset($_POST["senha"])) {
    $senha = md5(trim($_POST["senha"]));
}

//validar o usuário no BD
$sql = "SELECT * FROM email WHERE email='$login' AND senha='$senha'";

$result = $con->query($sql);

$total_de_usuarios = $result->num_rows;

if ($total_de_usuarios == 1) {
    $dados = $result->fetch_assoc();

    //salva os dados na sessão
    $_SESSION["email"] = $dados["email"];
    $_SESSION["senha"] = $dados["senha"];

    //redirecionar para a página restrita
    header("Location: index.php");
    exit;
} else {
    echo "<p>Usuário não encontrado</p>";
    echo "<a href=\"index.php\">Voltar</a>";
}
