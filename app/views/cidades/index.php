<h2>Lista de Cidades</h2>

<?php foreach ($cidades as $cidade): ?>

    ID: <?= $cidade->getId(); ?> <br>
    Nome: <?= $cidade->getNome(); ?> <br>
    Estado: <?= $cidade->getEstado(); ?> <br>
    <hr>

<?php endforeach; ?>
