<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Tela de login</title>
    </style>
</head>
<body>
<div class="box-login">
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <br>
            <input type="password" name="senha" placeholder="Senha"required>
            <br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            <a href="home.php">Voltar</a><br><br>
            <a href="formulario.php">Cadastre-se</a>

        </form>
    </div>
</body>
</html>