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
 $aeroporto1 = new Aeroporto("Aeroporto 1", "AAA", "CEP1", "Endereço1", 3, 3);
$aeroporto2 = new Aeroporto("Aeroporto 2", "BBB", "CEP2", "Endereço2", 4, 4);
$aeronave1 = new Aeronave("Modelo 1", 150, Status::DISPONIVEL);
$horarioSaida = new DateTime('2024-03-27 08:00:00');
$horarioChegada = new DateTime('2024-03-27 12:00:00');
// $voo = new Voo();

// $passagem = new Passagem("123",123.1, $voo, $usuario);
// // echo $passagem;

/*_____TESTANDO CHECKIN_____*/
// $chekin = new Checkin($usuario, $passagem, $bagagem);
// echo $chekin;

/*_____TESTE AERONAVE_____*/
$aeronave = new Aeronave("Boeing 747", 416);
// echo $aeronave;

/*_____TESTE AEROPORTO_____*/
 // $aeroporto1->adicionarVoo($voo);
// $aeroporto1->adicionarVoo($voo);
// $aeroporto1->removerVoo($voo);

// echo $aeroporto1;

/*_____TESTE VOO_____*/
 $voo1 = new Voo();
$voo1->adicionarAeronave($aeronave);
// echo $voo1->getAeronave()->getModelo();
$voo1->adicionarAeronave($aeronave1);
// echo $voo1->getAeronave()->getModelo();

$voo1->setCodigo("afkdsfj");

// echo $aeroporto1;

// echo "\n";

$voo1->adicionarOrigem($aeroporto1);
// echo $voo1->getOrigem()->getNome();

// echo $voo1->getOrigem();

$voo1->adicionarDestino($aeroporto2);
// echo $voo1->getDestino()->getNome();

// $voo1->cancelarVoo();

// echo $voo1->getOrigem();

$voo1->setHorarioChegada($horarioChegada);
$voo1->setHorarioSaida($horarioSaida);

// echo $voo1->calculaTempoVoo();

// $aeroporto3 = new Aeroporto("Aeroporto 3", "BBB", "CEP2", "Endereço2", 4, 4);
// $aeroporto4 = new Aeroporto("Aeroporto 4", "BBB", "CEP2", "Endereço2", 4, 4);

// $voo1->adicionarEscala($aeroporto3);
// $voo1->adicionarEscala($aeroporto4);



// foreach ($voo1->getEscalas() as $aeroporto)
// {
//     echo $aeroporto;
//     echo "\n";
// }
// $voo1->removerEscala($aeroporto3);
// echo $aeroporto3;

$tripulante1 = new Tripulante("João", "joao@example.com", "123.456.789-00", "ABC123", Cargo::AEROMOCA);
$tripulante2 = new Tripulante("Joãofsd", "joao@example.com", "123.456.789-00", "ABC123", Cargo::AEROMOCA);
$tripulante3 = new Tripulante("João222", "joao@example.com", "123.456.789-00", "ABC123", Cargo::AEROMOCA);
$tripulante4 = new Tripulante("Joãodsf", "joao@example.com", "123.456.789-00", "ABC123", Cargo::PILOTO);
$tripulante5 = new Tripulante("Joãofsdd", "joao@example.com", "123.456.789-00", "ABC123", Cargo::PILOTO);
$tripulante6 = new Tripulante("Joãorwe", "joao@example.com", "123.456.789-00", "ABC123", Cargo::COPILOTO);
$tripulante7 = new Tripulante("Joãosg", "joao@example.com", "123.456.789-00", "ABC123", Cargo::COPILOTO);

$voo1->adicionarTripulante($tripulante1);
$voo1->adicionarTripulante($tripulante2);
$voo1->adicionarTripulante($tripulante5);
$voo1->adicionarTripulante($tripulante6);

foreach($voo1->getTripulacao() as $tripulante)
{
    echo $tripulante;
    echo "\n";
}

$usuario1 = new Usuario("Usuário 1", "usuario1@example.com", "123.456.789-01", "Cidade 1", "Endereço 1");
$usuario2 = new Usuario("Usuário 2", "usuario2@example.com", "123.456.789-02", "Cidade 2", "Endereço 2");
$usuario3 = new Usuario("Usuário 3", "usuario3@example.com", "123.456.789-03", "Cidade 3", "Endereço 3");
$usuario4 = new Usuario("Usuário 4", "usuario4@example.com", "123.456.789-04", "Cidade 4", "Endereço 4");
$usuario5 = new Usuario("Usuário 5", "usuario5@example.com", "123.456.789-05", "Cidade 5", "Endereço 5");
$usuario6 = new Usuario("Usuário 6", "usuario6@example.com", "123.456.789-06", "Cidade 6", "Endereço 6");
$usuario7 = new Usuario("Usuário 7", "usuario7@example.com", "123.456.789-07", "Cidade 7", "Endereço 7");
$usuario8 = new Usuario("Usuário 8", "usuario8@example.com", "123.456.789-08", "Cidade 8", "Endereço 8");
$usuario9 = new Usuario("Usuário 9", "usuario9@example.com", "123.456.789-09", "Cidade 9", "Endereço 9");
$usuario10 = new Usuario("Usuário 10", "usuario10@example.com", "123.456.789-10", "Cidade 10", "Endereço 10");

$passagem1 = new Passagem("001", 100.00, $voo1, $usuario1);
$passagem2 = new Passagem("002", 120.00, $voo1, $usuario2);
$passagem3 = new Passagem("003", 110.00, $voo1, $usuario3);
$passagem4 = new Passagem("004", 90.00, $voo1, $usuario4);
$passagem5 = new Passagem("005", 95.00, $voo1, $usuario5);
$passagem6 = new Passagem("006", 105.00, $voo1, $usuario6);
$passagem7 = new Passagem("007", 115.00, $voo1, $usuario7);
$passagem8 = new Passagem("008", 80.00, $voo1, $usuario8);
$passagem9 = new Passagem("009", 85.00, $voo1, $usuario9);
$passagem10 = new Passagem("010", 125.00, $voo1, $usuario10);

$voo1->adicionarPassageiro($usuario1, $passagem1);
$voo1->adicionarPassageiro($usuario2, $passagem2);
$voo1->adicionarPassageiro($usuario3, $passagem3);
$voo1->adicionarPassageiro($usuario4, $passagem4);
$voo1->adicionarPassageiro($usuario5, $passagem5);
$voo1->adicionarPassageiro($usuario6, $passagem6);
$voo1->adicionarPassageiro($usuario7, $passagem7);
$voo1->adicionarPassageiro($usuario8, $passagem8);
$voo1->adicionarPassageiro($usuario9, $passagem9);
$voo1->adicionarPassageiro($usuario10, $passagem10);

$bagagem1 = new Bagagem(20.0, 1, $usuario1);
$bagagem2 = new Bagagem(20.0, 2, $usuario2);
$bagagem3 = new Bagagem(20.0, 3, $usuario3);
$bagagem4 = new Bagagem(20.0, 4, $usuario4);
$bagagem5 = new Bagagem(20.0, 5, $usuario5);
$bagagem6 = new Bagagem(20.0, 6, $usuario6);
$bagagem7 = new Bagagem(20.0, 7, $usuario7);
$bagagem8 = new Bagagem(20.0, 8, $usuario8);
$bagagem9 = new Bagagem(20.0, 9, $usuario9);
$bagagem10 = new Bagagem(20.0, 10, $usuario10);

// foreach($voo1->getPassageiros() as $passageiro)
// {
//     echo $passageiro;
//     echo "\n";
// }

/*_____TESTAR CHECKIN_____*/

$checkin1 = new Checkin($usuario1, $passagem1, $bagagem1);
$checkin2 = new Checkin($usuario2, $passagem2, $bagagem2);
$checkin3 = new Checkin($usuario3, $passagem3, $bagagem3);
$checkin4 = new Checkin($usuario4, $passagem4, $bagagem4);
$checkin5 = new Checkin($usuario5, $passagem5, $bagagem5);
$checkin6 = new Checkin($usuario6, $passagem6, $bagagem6);
$checkin7 = new Checkin($usuario7, $passagem7, $bagagem7);
$checkin8 = new Checkin($usuario8, $passagem8, $bagagem8);
$checkin9 = new Checkin($usuario10, $passagem9, $bagagem9);
$checkin10 = new Checkin($usuario9, $passagem10, $bagagem10);

echo $checkin1->validar();
echo "\n";
echo $checkin2->validar();
echo "\n";
echo $checkin3->validar();
echo "\n";
echo $checkin4->validar();
echo "\n";
echo $checkin5->validar();
echo "\n";
echo $checkin6->validar();
echo "\n";
echo $checkin7->validar();
echo "\n";
echo $checkin8->validar();
echo "\n";
echo $checkin9->validar();
echo "\n";
echo $checkin10->validar();
echo "\n";

// foreach($voo1->getPassageiros() as $passageiro)
// {
//     echo $passageiro;
//     echo "\n";
// }

echo $voo1;