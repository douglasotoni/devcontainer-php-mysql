<?php
$host = 'mysql';
$db   = 'novo_cep';
$user = 'mysql';
$pass = 'mysql';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "<h2>✅ Conectado com sucesso ao MySQL!</h2>";

    // Teste simples: listar dados
    $stmt = $pdo->query("SELECT * FROM users");

    echo "<h3>Registrod no banco:</h3><ul>";
    foreach ($stmt as $row) {
        echo "<li>" . htmlspecialchars($row['name']) . "</li>";
    }
    echo "</ul>";
} catch (\PDOException $e) {
    echo "<h2>❌ Erro de conexão:</h2>";
    echo "<pre>" . $e->getMessage() . "</pre>";
}
?>
