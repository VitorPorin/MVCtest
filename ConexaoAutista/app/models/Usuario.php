<?php


class User {
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    // Create - Inserir novo usuário
    public function createUser($nomeUsuario, $emailUsuario, $senhaUsuario, $senhaReplyUser) {
        if ($senhaUsuario === $senhaReplyUser) {
            $hashedPassword = password_hash($senhaUsuario, PASSWORD_DEFAULT);
            $sql = "INSERT INTO usuarios (nomeUsuario, emailUsuario, senhaUsuario) VALUES ('$nomeUsuario', '$emailUsuario', '$hashedPassword')";
            if (mysqli_query($this->conexao, $sql)) {
                return true;
            } else {
                return false;
            }
        }
        return false;
    }

    // Read - Buscar usuário por email
    public function getUserByEmail($emailUsuario) {
        $sql = "SELECT * FROM usuarios WHERE emailUsuario = '$emailUsuario'";
        $result = mysqli_query($this->conexao, $sql);
        return mysqli_fetch_assoc($result);
    }

    // Update - Atualizar senha do usuário
    public function updatePassword($emailUsuario, $novaSenha) {
        $hashedPassword = password_hash($novaSenha, PASSWORD_DEFAULT);
        $sql = "UPDATE usuarios SET senhaUsuario = '$hashedPassword' WHERE emailUsuario = '$emailUsuario'";
        return mysqli_query($this->conexao, $sql);
    }

    // Delete - Deletar usuário
    public function deleteUser($emailUsuario) {
        $sql = "DELETE FROM usuarios WHERE emailUsuario = '$emailUsuario'";
        return mysqli_query($this->conexao, $sql);
    }
}

class User {
    private $db;


    public function __construct() {
        $this->db = require '../config/database.php';
    }

    public function findByEmail($email) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch();
    }
    public function register($nomeUsuario, $emailUsuario, $senhaUsuario) {
        // Hashing da senha para segurança
        $senhaHash = password_hash($senhaUsuario, PASSWORD_DEFAULT);

        // Insere o novo usuário no banco
        $stmt = $this->db->prepare("INSERT INTO usuarios (nomeUsuario, emailUsuario, senhaUsuario) VALUES (?, ?, ?)");
        return $stmt->execute([$nomeUsuario, $emailUsuario, $senhaHash]);
    }

}



 