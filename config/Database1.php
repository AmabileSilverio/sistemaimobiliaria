<?php
$host = "localhost";
$dbname = "imobiliariajg";
$username = "root";
$password = "";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $username, $password
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão realizada com sucesso!<br>";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
