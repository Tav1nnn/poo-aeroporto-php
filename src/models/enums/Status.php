<?php
namespace otavio\PooAeroportoPhp;

enum Status: string
{
    case DISPONIVEL = 'disponivel';
    case OCULPADO = 'oculpado';
    case MANUTENCAO = 'manutencao';
}