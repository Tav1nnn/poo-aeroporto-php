<?php

namespace otavio\PooAeroportoPhp\models\enums;

enum Cargo: string
{
    case PILOTO = "Piloto";
    case COPILOTO = "Co-piloto";
    case AEROMOCA = "Aeromoça";
}