<?php

namespace otavio\PooAeroportoPhp;
use DateTime;

$tripulante1 = new Tripulante("Tripulante 1", "tripulante1@example.com", "111.111.111-11", "Licença 1", Cargo::PILOTO);
$tripulante2 = new Tripulante("Tripulante 2", "tripulante2@example.com", "222.222.222-22", "Licença 2", Cargo::COPILOTO);
$tripulante3 = new Tripulante("Tripulante 3", "tripulante3@example.com", "333.333.333-33", "Licença 3", Cargo::AEROMOCA);
$tripulante4 = new Tripulante("Tripulante 4", "tripulante4@example.com", "444.444.444-44", "Licença 4", Cargo::PILOTO);
$tripulante5 = new Tripulante("Tripulante 5", "tripulante5@example.com", "555.555.555-55", "Licença 5", Cargo::COPILOTO);
$tripulante6 = new Tripulante("Tripulante 6", "tripulante6@example.com", "666.666.666-66", "Licença 6", Cargo::AEROMOCA);
$tripulante7 = new Tripulante("Tripulante 7", "tripulante7@example.com", "777.777.777-77", "Licença 7", Cargo::PILOTO);
$tripulante8 = new Tripulante("Tripulante 8", "tripulante8@example.com", "888.888.888-88", "Licença 8", Cargo::COPILOTO);
$tripulante9 = new Tripulante("Tripulante 9", "tripulante9@example.com", "999.999.999-99", "Licença 9", Cargo::AEROMOCA);
$tripulante10 = new Tripulante("Tripulante 10", "tripulante10@example.com", "101.010.101-01", "Licença 10", Cargo::PILOTO);

$aeroporto1 = new Aeroporto("Aeroporto 1", "AAA", "CEP1", "Endereço1", 3, 3);
$aeroporto2 = new Aeroporto("Aeroporto 2", "BBB", "CEP2", "Endereço2", 4, 4);
$aeroporto3 = new Aeroporto("Aeroporto 3", "CCC", "CEP3", "Endereço3", 2, 2);

$aeronave1 = new Aeronave("Modelo 1", 150, Status::DISPONIVEL);
$aeronave2 = new Aeronave("Modelo 2", 200, Status::OCULPADO);
$aeronave3 = new Aeronave("Modelo 3", 180, Status::MANUTENCAO);

$horarioSaida = new DateTime('2024-03-27 08:00:00');
$horarioChegada = new DateTime('2024-03-27 12:00:00');

$voo = new Voo($aeroporto1, $aeroporto2, $horarioSaida, $horarioChegada, $aeronave1);

echo $voo->calculaTempoVoo();

