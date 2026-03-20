<?php

class Cidade
{
    private $id;
    private $nome;
    private $estado;

    public function __construct($nome, $estado = null)
    {
        $this->setNome($nome);
        $this->setEstado($estado);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setId($id)
    {
        $this->id = (int) $id;
    }

    public function setNome($nome)
    {
        if (!empty($nome)) {
            $this->nome = $nome;
        }
    }

    public function setEstado($estado){
        if (!empty($estado)) {
            $this->estado = $estado;
        }
    }
}