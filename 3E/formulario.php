<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone) 
    VALUES ('$nome','$senha','$email','$telefone')");
        echo "<script>alert('Cadastrado com Sucesso, Agora é só fazer login :)')</script>";
        //header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3E Soluções</title>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastre-se</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div><br>
                <input type="submit" name="submit" id="submit"><br><br>
                <a href="login.php" class="voltar">Voltar pro Login</a> 
                </div>

                
                </div>
                </div>
                <br><br>
                
                
            </fieldset>
        </form>
    </div>
</body>
</html>