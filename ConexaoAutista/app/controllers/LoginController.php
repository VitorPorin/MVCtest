<?php
include_once('C:\xampp\htdocs\ConexaoAutista\ConexaoAutista\app\config\database.php');
include_once('User.php');
require_once '../app/models/Usuario.php';

class LoginController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
            $emailUsuario = $_POST['emailUsuario'];
            $senhaUsuario = $_POST['senhaUsuario'];

            $userModel = new User($conexao);
            $user = $userModel->getUserByEmail($emailUsuario);

            if ($user && password_verify($senhaUsuario, $user['senhaUsuario'])) {
                $_SESSION['user'] = $user;
                header("Location: /home");
            } else {
                echo "E-mail ou senha inválidos";
            }
        }
    }

    public function index() {
        include '../app/views/login.php';
    }

    public function autenticar() {
        $email = $_POST['emailUsuario'] ?? '';
        $senha = $_POST['senhaUsuario'] ?? '';

        $usuario = new Usuario();

        if ($usuario->autenticar($email, $senha)) {
            header('Location: /public/home.php'); // Redirecionar após login bem-sucedido.
        } else {
            echo "<script>alert('Usuário ou senha inválidos');</script>";
            $this->index();
        }
    }
   

class LoginController {
    public function login() {
        require_once '../app/views/layout/header.php';
        require_once '../app/views/login.php';
        require_once '../app/views/layout/footer.php';
    }

  } 
  session_start();
  $_SESSION['user'] = $user;  // Salva os dados do usuário na sessão  
}

?>