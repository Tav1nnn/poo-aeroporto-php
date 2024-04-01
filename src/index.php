<?php

namespace otavio\PooAeroportoPhp;
require_once "models/enums/Cargo.php";
require_once "models/enums/Status.php";
require_once "models/Pessoa.php";
require_once "models/Tripulante.php";
require_once "models/Aeronave.php";
require_once "models/Aeroporto.php";
require_once "models/Bagagem.php";
require_once "models/Checkin.php";
require_once "models/Passagem.php";
require_once "models/Usuario.php";
require_once "models/Voo.php";
use DateTime;


/*_____TESTANDO CLASSE USUARIO_____*/
// $usuario = new Usuario("Fulano", "fulano@example.com", "123.456.789-00", "Cidade Exemplo", "Endereço Exemplo");
// echo $usuario;

/*_____TESTANDO CLASSE TRIPULANTE_____*/
$tripulante = new Tripulante("João", "joao@example.com", "123.456.789-00", "ABC123", Cargo::AEROMOCA);
echo $tripulante;

$tripulante->setCargo(Cargo::COPILOTO);
echo $tripulante;