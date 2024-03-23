<?php
require_once 'models/Aeronave.php';

$aeronave = new Aeronave();

$aeronave->setModelo('Boing 777-800');
$aeronave->setCapacidade(600);
$aeronave->editarStatus('VOANDO');
