<?php

require_once '../app/controllers/CidadeController.php';

$controller = new CidadeController();

// Para testar inserção
$controller->store();

// Para testar o listar
$controller->index();

