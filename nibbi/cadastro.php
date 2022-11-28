<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style-cadastro.css">
    <title>Nibbi</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicons/grandelogo.png">
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="./assets/images/teste2.png" class="img-fluid">
        </div>
        <div class="form">
            <form action="cadastro.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="login.php">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Primeiro Nome</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>

                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha</label>
                        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
                    </div>
                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>
                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="female" type="radio" name="gender">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="radio" name="gender">
                            <label for="male">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input id="others" type="radio" name="gender">
                            <label for="others">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input id="none" type="radio" name="gender">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>
                <div class="continue-button">
                    </br>
                    </br>
                    <button><a href="login.php">Cadastrar-se</a></button>
                    <?php

                    if (isset($_POST["submit"])) {

                        require('conexao.php');

                        $firstname = $_POST["firstname"];
                        $lastname = $_POST["lastname"];
                        $email = $_POST["email"];
                        $number = $_POST["number"];
                        $password = $_POST["password"];
                        $confirmPassword = $_POST["confirmPassword"];
                        $gender = $_POST["gender"];


                        $result = mysqli_query($con, "INSERT INTO cadastro(firstname, lastname, email, number, password, confirmPassword, gender) 
                                                    VALUES ('$firstname','$lastname','$email','$number','$password','$confirmPassword','$gender')");
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>
</body>

</html>