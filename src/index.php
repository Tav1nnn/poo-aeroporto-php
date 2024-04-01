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
 $usuario = new Usuario("Fulano", "fulano@example.com", "123.456.789-00", "Cidade Exemplo", "Endereço Exemplo");
// echo $usuario;

/*_____TESTANDO CLASSE TRIPULANTE_____*/
 $tripulante = new Tripulante("João", "joao@example.com", "123.456.789-00", "ABC123", Cargo::AEROMOCA);
// echo $tripulante;

// $tripulante->setCargo(Cargo::COPILOTO);
// echo $tripulante;

/*_____TESTANDO CLASSE BAGAGEM_____*/
$bagagem = new Bagagem(10, 123423, $usuario);
// echo $bagagem;

/*_____TESTANDO PASSAGEM_____*/
// $aeroporto1 = new Aeroporto("Aeroporto 1", "AAA", "CEP1", "Endereço1", 3, 3);
// $aeroporto2 = new Aeroporto("Aeroporto 2", "BBB", "CEP2", "Endereço2", 4, 4);
// $aeronave1 = new Aeronave("Modelo 1", 150, Status::DISPONIVEL);
// $horarioSaida = new DateTime('2024-03-27 08:00:00');
// $horarioChegada = new DateTime('2024-03-27 12:00:00');
// $voo = new Voo($aeroporto1, $aeroporto2, $horarioSaida, $horarioChegada, $aeronave1);

// $passagem = new Passagem("123",123.1, $voo, $usuario);
// // echo $passagem;

// /*_____TESTANDO CHECKIN_____*/
// $chekin = new Checkin($usuario, $passagem, $bagagem);
// echo $chekin;

