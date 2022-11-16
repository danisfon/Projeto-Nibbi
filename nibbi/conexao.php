<?php

$local_bd = "localhost";
$usuario_bd = "root";
$senha_bd = "";
$database_bd = "nibbi";


$con = new mysqli($local_bd, $usuario_bd, $senha_bd, $database_bd);

if ($con->connect_errno) {
  echo "<p>Ocorreu um erro ao conectar no banco de dados </p>";
} else {
  echo "<p> Conexão efetuada com sucesso </p>";
}
