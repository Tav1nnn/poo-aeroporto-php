<?php
require_once 'models/Aeronave.php';

$aeronave = new Aeronave();

$aeronave->setModelo('Boing 777-800');
$aeronave->setCapacidade(600);
$aeronave->editarStatus('VOANDO');

?>

<html>
    <head>Minha Página HTML</head>

    <body>
        <h2>Titulo da pagina</h2>
        <strong>Modelo: <?= $aeronave->getModelo()?></strong>
        <strong>Capacidade: <?= $aeronave->getCapacidade() ?></strong>
        <strong>Status: <?= $aeronave->getStatus() ?></strong>
    </body>
</html>