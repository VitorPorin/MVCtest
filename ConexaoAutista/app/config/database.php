<?php

return new PDO('mysql:host=localhost;dbname=conexao_autista', 'root', '');

$servername = "localhost";
$username = "root";  
$password = "";  
$dbname = "conexao_autista";  

// Cria a conexão
$conexao = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se há erro na conexão
if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}

?>