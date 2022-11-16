<?php
session_start();
//print_r($_REQUEST);
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])){

    include_once('conexao.php');
        $email = $_POST['email'];
        $password = $_POST['password'];

    //print_r('Email: ' . $email);
    //print_r('<br>');
    //print_r('Senha: ' . $senha);
    $sql = "SELECT * FROM cadastro WHERE email = '$email' and password = '$password'";

    $result = $con->query($sql);
    //print_r($sql);
    //print_r($result);

    //acessa
    if(mysqli_num_rows($result) < 1)
    {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('Location: login.php');
    }
    else
    {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('Location: sistema.php');
    }
}else{

    //não acessa
    header('Location: login.php');

}
?>
