<?php
require_once '../app/models/Cidade.php';

//Criando Objeto
$cidade = new Cidade();

//Atribuindo valores diretamente

$cidade->id = 1;
$cidade->nome = "Itapira";
$cidade->estado = "SP";

echo "<pre>";
var_dump($cidade);
echo "</pre>";

//index.php será o pronto de entrada do sistema.

echo "<h1>Imobiliaria JG</h1>";
echo "<p>Projeto iniciado com sucesso.</p>";

?>