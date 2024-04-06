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

echo "-----CRIANDO TRES AEROPORTOS-----\n";

$aeroporto1 = new Aeroporto("Aeroporto Internacional de Guarulhos", "GRU", "07190-100", "Rod. Hélio Smidt, s/n - Cumbica, Guarulhos - SP, 07190-100, Brasil", 2);
$aeroporto2 = new Aeroporto("Aeroporto de Congonhas", "CGH", "04696-900", "Av. Washington Luís, s/n - Campo Belo, São Paulo - SP, 04696-900, Brasil", 3);
$aeroporto3 = new Aeroporto("Aeroporto Internacional de Brasília", "BSB", "71608-900", "Lago Sul, Brasília - DF, 71608-900, Brasil", 2);

echo $aeroporto1;
echo "\n";
echo $aeroporto2;
echo "\n";
echo $aeroporto3;
echo "\n";

echo "________________________________________________________________________________________________\n";

echo "-----CRIANDO UMA AERONAVE-----\n";
$aeronave = new Aeronave("Boeing 737", 150);

echo $aeronave;
echo "\n";
echo "________________________________________________________________________________________________\n";

echo "-----CRIANDO UMA EQUIPE DE TRIPULACAO-----\n";
$tripulante1 = new Tripulante("João Silva", "joao@example.com", "123.456.789-00", "Licença de Piloto", Cargo::PILOTO);
$tripulante2 = new Tripulante("Maria Santos", "maria@example.com", "987.654.321-00", "Licença de Co-piloto", Cargo::COPILOTO);
$tripulante3 = new Tripulante("Pedro Oliveira", "pedro@example.com", "456.789.123-00", "Licença de Aeromoça", Cargo::AEROMOCA);
$tripulante4 = new Tripulante("Ana Souza", "ana@example.com", "321.654.987-00", "Licença de Aeromoça", Cargo::AEROMOCA);

echo $tripulante1;
echo "\n";
echo  $tripulante2;
echo "\n";
echo $tripulante3;
echo "\n";
echo $tripulante4;
echo "\n";

echo "________________________________________________________________________________________________\n";

echo "-----CRIANDO UM VOO-----\n";
$voo = new Voo();

$voo->setCodigo("Voo1-00003");

echo "Voo " . $voo->getCodigo() . "\n\n";

echo "*****Adicionando Horario de Saida e Chegada e mostrando tempo de Voo \n";
$horarioSaida = new DateTime('2024-03-27 08:00:00');
$horarioChegada = new DateTime('2024-03-27 12:00:00');

$voo->setHorarioSaida($horarioSaida);
$voo->setHorarioChegada($horarioChegada);

echo "Tempo de voo: " . $voo->calculaTempoVoo() . "\n\n";

echo "*****Adicionando Uma Aeronave para o Voo \n";
$voo->adicionarAeronave($aeronave);
echo "Aeronave do Voo " . $voo->getCodigo() . " " . $aeronave . "\n\n";

echo "*****Adicionando Origem, Destino e Escala para o Voo\n";
$voo->adicionarOrigem($aeroporto1);
$voo->adicionarDestino($aeroporto2);
$voo->adicionarEscala($aeroporto3);

echo "Origem: " . $aeroporto1 . "\n";
echo "Destino: " . $aeroporto1 . "\n";
echo "Escala: " . $aeroporto1 . "\n\n";

echo "*****Adicionando uma Tripulação para o Voo\n\n";
$voo->adicionarTripulante($tripulante1);
$voo->adicionarTripulante($tripulante2);
$voo->adicionarTripulante($tripulante3);
$voo->adicionarTripulante($tripulante4);

echo $voo . "\n\n";

echo "*****Voo está todo configurado falta apenas o seus passageiros\n\n";

echo "________________________________________________________________________________________________\n";

echo "-----CRIANDO DEZ USUARIOS-----\n";

$usuario1 = new Usuario("Alice Silva", "alice@example.com", "123.456.789-01", "São Paulo", "Rua A, 123");
$usuario2 = new Usuario("Bruno Oliveira", "bruno@example.com", "123.456.789-02", "Rio de Janeiro", "Rua B, 456");
$usuario3 = new Usuario("Carla Santos", "carla@example.com", "123.456.789-03", "Belo Horizonte", "Rua C, 789");
$usuario4 = new Usuario("Diego Lima", "diego@example.com", "123.456.789-04", "Salvador", "Rua D, 101");
$usuario5 = new Usuario("Elena Pereira", "elena@example.com", "123.456.789-05", "Brasília", "Rua E, 202");
$usuario6 = new Usuario("Fernando Costa", "fernando@example.com", "123.456.789-06", "Curitiba", "Rua F, 303");
$usuario7 = new Usuario("Gabriela Martins", "gabriela@example.com", "123.456.789-07", "Fortaleza", "Rua G, 404");
$usuario8 = new Usuario("Henrique Almeida", "henrique@example.com", "123.456.789-08", "Recife", "Rua H, 505");
$usuario9 = new Usuario("Isabela Oliveira", "isabela@example.com", "123.456.789-09", "Manaus", "Rua I, 606");
$usuario10 = new Usuario("João Silva", "joao@example.com", "123.456.789-10", "Porto Alegre", "Rua J, 707");

echo $usuario1;
echo "\n";
echo $usuario2;
echo "\n";
echo $usuario3;
echo "\n";
echo $usuario4;
echo "\n";
echo $usuario5;
echo "\n";
echo $usuario6;
echo "\n";
echo $usuario7;
echo "\n";
echo $usuario8;
echo "\n";
echo $usuario9;
echo "\n";
echo $usuario10;
echo "\n\n";

echo "________________________________________________________________________________________________\n";

echo "-----USUARIO COMPRANDO PASSAGENS PARA O VOO ". $voo->getCodigo() . "-----\n";
$passagem1 = new Passagem("001", 100.00, $voo, $usuario1);
$passagem2 = new Passagem("002", 120.00, $voo, $usuario2);
$passagem3 = new Passagem("003", 110.00, $voo, $usuario3);
$passagem4 = new Passagem("004", 90.00, $voo, $usuario4);
$passagem5 = new Passagem("005", 95.00, $voo, $usuario5);
$passagem6 = new Passagem("006", 105.00, $voo, $usuario6);
$passagem7 = new Passagem("007", 115.00, $voo, $usuario7);
$passagem8 = new Passagem("008", 80.00, $voo, $usuario8);
$passagem9 = new Passagem("009", 85.00, $voo, $usuario9);
$passagem10 = new Passagem("010", 125.00, $voo, $usuario10);

echo $passagem1;
echo "\n";
echo $passagem2;
echo "\n";
echo $passagem3;
echo "\n";
echo $passagem4;
echo "\n";
echo $passagem5;
echo "\n";
echo $passagem6;
echo "\n";
echo $passagem7;
echo "\n";
echo $passagem8;
echo "\n";
echo $passagem9;
echo "\n";
echo $passagem10;
echo "\n\n";

echo "________________________________________________________________________________________________\n";

echo "-----ADICIONAR O USUARIO AO VOO AGORA-----\n";
$voo->adicionarPassageiro($usuario1);
$voo->adicionarPassageiro($usuario2);
$voo->adicionarPassageiro($usuario3);
$voo->adicionarPassageiro($usuario4);
$voo->adicionarPassageiro($usuario5);
$voo->adicionarPassageiro($usuario6);
$voo->adicionarPassageiro($usuario7);
$voo->adicionarPassageiro($usuario8);
$voo->adicionarPassageiro($usuario9);
$voo->adicionarPassageiro($usuario10);
echo $voo . "\n\n";

echo "________________________________________________________________________________________________\n";

echo "-----USUARIO ADICIONANDO UMA BAGAGEM PARA ESTE USUARIO-----\n";
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

echo $bagagem1;
echo "\n";
echo $bagagem2;
echo "\n";
echo $bagagem3;
echo "\n";
echo $bagagem4;
echo "\n";
echo $bagagem5;
echo "\n";
echo $bagagem6;
echo "\n";
echo $bagagem7;
echo "\n";
echo $bagagem8;
echo "\n";
echo $bagagem9;
echo "\n";
echo $bagagem10;
echo "\n\n";

echo "________________________________________________________________________________________________\n";

echo "-----AGORA FAZER O CHEKIN PARA LEVANTAR VOO-----\n";

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

echo "Nome: ". $usuario1->getNome() . " -> Chekin: " .  ($checkin1->validar() ? "true" : "false");
echo "\n";
echo "Nome: ". $usuario2->getNome() . " -> Chekin: " .  ($checkin2->validar() ? "true" : "false");
echo "\n";
echo "Nome: ". $usuario3->getNome() . " -> Chekin: " .  ($checkin3->validar() ? "true" : "false");
echo "\n";
echo "Nome: ". $usuario4->getNome() . " -> Chekin: " .  ($checkin4->validar() ? "true" : "false");
echo "\n";
echo "Nome: ". $usuario5->getNome() . " -> Chekin: " .  ($checkin5->validar() ? "true" : "false");
echo "\n";
echo "Nome: ". $usuario6->getNome() . " -> Chekin: " .  ($checkin6->validar() ? "true" : "false");
echo "\n";
echo "Nome: ". $usuario7->getNome() . " -> Chekin: " .  ($checkin7->validar() ? "true" : "false");
echo "\n";
echo "Nome: ". $usuario8->getNome() . " -> Chekin: " .  ($checkin8->validar() ? "true" : "false");
echo "\n";
echo "Nome: ". $usuario9->getNome() . " -> Chekin: " .  ($checkin9->validar() ? "true" : "false");
echo "\n";
echo "Nome: ". $usuario10->getNome() . " -> Chekin: " .  ($checkin10->validar() ? "true" : "false");
echo "\n\n";

echo "COMO MOSTROU " . $usuario9->getNome() . " e " . $usuario10->getNome() . " NÃO PASSARAM NO CHEKIN LOGO ESTÃO FORA DO VOO\n\n";
echo $voo . "\n\n";

echo "________________________________________________________________________________________________\n";

echo "-----PREPARAR VOO PARA DECOLAR-----\n";
echo "Voo está pronto? " . ($voo->prepararParaVoo() ? "true" : "false");
