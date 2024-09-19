<?php
// Incluir a conexão ao banco de dados
include 'db_connect.php';

// Consulta para buscar os posts
$sql = "SELECT p.titulo, p.data_postagem, u.nome AS autor 
        FROM post p 
        JOIN usuario u ON p.autor_id = u.id 
        ORDER BY p.data_postagem DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='post'>";
        echo "<h3>" . $row['titulo'] . "</h3>";
        echo "<p><strong>Data:</strong> " . $row['data_postagem'] . "</p>";
        echo "<p><strong>Autor:</strong> " . $row['autor'] . "</p>";
        echo "</div>";
    }
} else {
    echo "Nenhum post encontrado.";
}

$conn->close();
?>
