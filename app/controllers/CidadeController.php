<?php
require_once __DIR__ . '/../models/Cidade.php';
require_once __DIR__ . '/../models/CidadeRepository.php';

class CidadeController
{
    private $repository;

    public function __construct()
    {
        $this->repository = new CidadeRepository();
    }

    public function index()
    {
        $cidades = $this->repository->listar();
        
        require_once '../views/cidades/index.php';
    }

    public function store()
    {
        $cidade = new Cidade("Campinas", "SP");

        $this->repository->salvar($cidade);

        echo "Cidade salva com sucesso!";
    }
}