<?php
$servername = "localhost";
$username = "root";  // Usuário do MySQL (modifique se necessário)
$password = "";  // Senha do MySQL (modifique se necessário)
$dbname = "blog";
$port = 3307;
$con = mysqli_connect($hostname, $username, $password, $database, $port);
if (mysqli_connect_errno()) {
    printf("Erro conexão: %s", mysqli_connect_error());
    exit();
}
// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
