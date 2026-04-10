<?php
require_once '../app/models/CidadeRepository.php';
require_once '../app/models/Cidade.php';

try {
    $repository = new CidadeRepository();

    $cidade = new Cidade("Mogi Mirim", "SP");

    // Salvando no banco
    $repository->salvar($cidade);

    echo "Cidade salva com sucesso!<br>";

    // Listando as cidades
    $cidades = $repository->listar();

    foreach ($cidades as $cidade) {
        echo "ID: " . $cidade->getId() . "<br>";
        echo "Nome: " . $cidade->getNome() . "<br>";
        echo "Estado: " . $cidade->getEstado() . "<br>";
        echo "<hr>";
    }
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}

/*
require_once '../config/database.php';

$db = Database::getInstance();
$conn = $db->getConnection();

echo "Conexão realizada com sucesso!";

// Inserindo Primeira Cidade Manualmente
$stmt = $conn->prepare(
    "INSERT INTO cidades (nome, estado) VALUES (?, ?)"
);
$stmt->execute(["Itapira", "SP"]);

// Realizando Primeira Consulta
$stmt = $conn->query("SELECT * FROM cidades");
$cidades = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($cidades);
echo "</pre>";
*/
?>
