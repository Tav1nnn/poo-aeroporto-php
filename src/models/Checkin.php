<?php

namespace otavio\PooAeroportoPhp;

class Checkin {
    private Usuario $usuario;
    private Passagem $passagem;

    public function __construct() {
        
    }

    public function validar($usuario, $passagem) {
        
    }

    public function getUsuario(): Usuario {
        return $this->usuario;
    }

    public function setUsuario(Usuario $usuario): void {
        $this->usuario = $usuario;
    }

    public function getPassagem(): Passagem {
        return $this->passagem;
    }

    public function setPassagem(Passagem $passagem): void {
        $this->passagem = $passagem;
    }
}