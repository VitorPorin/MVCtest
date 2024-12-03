<?php
include_once('C:\xampp\htdocs\ConexaoAutista\ConexaoAutista\app\config\database.php');
include_once('User.php');

class RegistroController {

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
            $nomeUsuario = $_POST['nomeUsuario'];
            $emailUsuario = $_POST['emailUsuario'];
            $senhaUsuario = $_POST['senhaUsuario'];
            $senhaReplyUser = $_POST['senhaReplyUser'];

            $userModel = new User($conexao);
            if ($userModel->createUser($nomeUsuario, $emailUsuario, $senhaUsuario, $senhaReplyUser)) {
                header("Location: /login");
            } else {
                echo "Erro ao cadastrar usuário";
            }
        }
    }
}
    public function show() {
        require_once '../app/views/layout/header.php';
        require_once '../app/views/register.php';
        require_once '../app/views/layout/footer.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Captura os dados do formulário
            $nomeUsuario = $_POST['nomeUsuario'];
            $emailUsuario = $_POST['emailUsuario'];
            $senhaUsuario = $_POST['senhaUsuario'];
            $senhaReplyUser = $_POST['senhaReplyUser'];

            // Validação simples
            if ($senhaUsuario === $senhaReplyUser) {
                $userModel = new User();
                $result = $userModel->register($nomeUsuario, $emailUsuario, $senhaUsuario);
                
                if ($result) {
                    // Redireciona para a página de login após o registro
                    header('Location: /login');
                    exit();
                } else {
                    echo "Erro ao registrar usuário.";
                }
            } else {
                echo "As senhas não coincidem.";
            }
        }
}
?>