<?php

require_once __DIR__ . '/../../config/database.php';  // Caminho absoluto para evitar problemas relativos
require_once 'Cidade.php';

class CidadeRepository 
{
    private $conn;

    public function __construct()
    {
        $db = Database::getInstance();
        $this->conn = $db->getConnection();
    }

    public function salvar(Cidade $cidade)
    {
        $stmt = $this->conn->prepare(
            "INSERT INTO cidades (nome, estado) VALUES (?, ?)"
        );

        $stmt->execute([
            $cidade->getNome(),
            $cidade->getEstado()
        ]);
    }

    public function listar()
    {
        $stmt = $this->conn->query("SELECT * FROM cidades");
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $cidades = [];

        foreach ($dados as $linhas) {
            $cidade = new Cidade(
                $linhas['nome'],
                $linhas['estado']
            );
            $cidade->setId($linhas['id']);
            $cidades[] = $cidade;
        }
        return $cidades;
    }
}