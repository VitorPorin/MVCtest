<?php
include_once('C:\xampp\htdocs\ConexaoAutista\ConexaoAutista\app\RegistroController.php');
$registroController = new RegistroController();
$registroController->registro();
    if(isset($_POST['submit'])){
        // Recebendo os dados do formulário
        include_once('C:\xampp\htdocs\ConexaoAutista\ConexaoAutista\app\config\database.php');
        
        // Sanitização e segurança dos dados
        $nomeUsuario = mysqli_real_escape_string($conecxao, $_POST['nomeUsuario']);
        $emailUsuario = mysqli_real_escape_string($conecxao, $_POST['emailUsuario']);
        $senhaUsuario = mysqli_real_escape_string($conecxao, $_POST['senhaUsuario']);
        $senhaReplyUser = mysqli_real_escape_string($conecxao, $_POST['senhaReplyUser']);

        // Verificar se as senhas são iguais
        if ($senhaUsuario === $senhaReplyUser) {
            // Inserção no banco de dados
            $result = mysqli_query($conecxao, "INSERT INTO usuarios (nomeUsuario, emailUsuario, senhaUsuario) 
                                                VALUES ('$nomeUsuario', '$emailUsuario', '$senhaUsuario')");
            
            // Redirecionamento para a tela de login após o cadastro
            header('Location: http://localhost/../../views/login.php');
            exit();
        } else {
            echo "<script>alert('As senhas não coincidem. Tente novamente.');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="C:\xampp\htdocs\ConexaoAutista\ConexaoAutista\app\public\css\registro.css">">
    <script defer src="app.js"></script>
    <link rel="shortcut icon" href="../../public/IMG/Logo Conexão Autista 2.png" type="image/x-icon">
    <title>Cadastre-se</title>
</head>

<body>
    <div class="controlGeral">
        <form class="form_main" action="registro.php" method="POST">
            <p class="heading">Cadastro</p>
            
            <!-- Nome Completo -->
            <div class="inputContainer">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAtUlEQVR4nO2SMQrCQBBFH9hYWmijps4h9BZ6Dc/geSKBlOI5tNRCaw0mXdKsCCOEJY5CRmz2wa9m979iBgJGREAKlJIMiC3Lb4DzksusM2lL+SsbC0GpCIpfC+4WgkwRJBaCWBbql1+BKUZEstBCkliWB97SA+bAGhi2zEcym8nbr+kDK+DSuJgjsAAGkiVwaszP8uf5V2UCHJS7dx+yB8aaYNeh3Em2mqA2EFSawBnlf4IAPg+2rZMxUS9otwAAAABJRU5ErkJggg==" alt="user-icon" class="inputIcon">
                <input placeholder="Nome Completo" id="username" class="inputField" type="text" name="nomeUsuario" required>
            </div>

            <!-- Email -->
            <div class="inputContainer">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAACXBIWXMAAAsTAAALEwEAmpwYAAABVElEQVR4nO3Vv0qbYRTH8Y9DijgIdnCoIBShIFLwIlx6Ab0C2zqKk9DJrfES3JyKi046dlNQpEiHUBSxiEkJ2OIgKkLrK5ETeY35IzEJCjnw4z2c5zzn+7zPX7r2HOwF5vEbSYtVQDYYN07SZmVLoHwHQEfC2cVWGwA7oZJ/G/yOj/jRAsBPzGAzFbuT8Afv8B6/mgDk8QkTKFa03Uu+isXrxTROHgA4xRz6MIt/VXJqdl7FAF4G+LxKziUWMIh+LNepV3ek+xiL8zaMRfwPLUZM5Ow3qFW3MRejzaAnir4NiVgmcnLNgvbwCq+xgXWMpm6UEXzDNt48AFZzyoYwGQtdjl/gc+iiYjNMRp9aU3gvcIhxfG1ie69E34NGoNJV8SG+SZMqYqrKObx1/mIpdlTySF1hDcdpUCGcsxYAkgqVaxY69Ux8KT982dSfte3h69rTtmu4aZikJN1IiQAAAABJRU5ErkJggg==" alt="email-icon" class="inputIcon">
                <input placeholder="Email" id="email" class="inputField" type="email" name="emailUsuario" required>
            </div>

            <!-- Senha -->
            <div class="inputContainer">
                <svg viewBox="0 0 16 16" fill="#2e2e2e" height="16" width="16" xmlns="http://www.w3.org/2000/svg" class="inputIcon">
                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
                </svg>
                <input placeholder="Senha" id="password" class="inputField" type="password" name="senhaUsuario" required>
            </div>

            <!-- Confirmar Senha -->
            <div class="inputContainer">
                <svg viewBox="0 0 16 16" fill="#2e2e2e" height="16" width="16" xmlns="http://www.w3.org/2000/svg" class="inputIcon">
                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
                </svg>
                <input placeholder="Confirmar senha" id="passwordConfirm" class="inputField" type="password" name="senhaReplyUser" required>
            </div>

            <!-- Redirecionamento para login -->
            <p class="chamadaParaLogin">Já possui uma conta? <a href="../../views/login.php" class="linkParaLogin">faça login agora!</a></p>
            
            <!-- Botão de submit -->
            <input id="button" value="Registrar-se!" type="submit" name="submit">
        </form>
    </div>

    <!-- Imagem de Destaque -->
    <div class="divControlImg">
        <img src="../../public/IMG/fotoCadastro.webp" class="imgDestaquePage" alt="Imagem de Cadastro">
        <a href="index.php"><img src="../../public/IMG/Logo Conexão Autista 2.png" alt="Logo" class='logo' /></a>
    </div>
    <div class="controlGeral">
        <form class="form_main" action="/register" method="POST">
            <p class="heading">Cadastro</p>
            <div class="inputContainer">
                <input placeholder="Nome Completo" class="inputField" type="text" name="nomeUsuario" required>
            </div>
            <div class="inputContainer">
                <input placeholder="Email" class="inputField" type="email" name="emailUsuario" required>
            </div>
            <div class="inputContainer">
                <input placeholder="Senha" class="inputField" type="password" name="senhaUsuario" required>
            </div>
            <div class="inputContainer">
                <input placeholder="Confirmar senha" class="inputField" type="password" name="senhaReplyUser" required>
            </div>
            <input type="submit" value="Registrar-se!" name="submit">
        </form>
    </div>
    <div class="controlGeral">
        <form class="form_main" action="/register" method="POST">
            <p class="heading">Cadastro</p>
            <div class="inputContainer">
                <input placeholder="Nome Completo" class="inputField" type="text" name="nomeUsuario" required>
            </div>
            <div class="inputContainer">
                <input placeholder="Email" class="inputField" type="email" name="emailUsuario" required>
            </div>
            <div class="inputContainer">
                <input placeholder="Senha" class="inputField" type="password" name="senhaUsuario" required>
            </div>
            <div class="inputContainer">
                <input placeholder="Confirmar senha" class="inputField" type="password" name="senhaReplyUser" required>
            </div>
            <input type="submit" value="Registrar-se!" name="submit">
        </form>
    </div>
</body>

</html>