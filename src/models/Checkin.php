<?php

namespace otavio\PooAeroportoPhp;

class Checkin {
    private Usuario $usuario;
    private Passagem $passagem;

    public function __construct(Usuario $usuario, Passagem $passagem) {
        $this->validar($usuario, $passagem);
    }

    private function validar(Usuario $usuario, Passagem $passagem) {
        if($passagem->getUsuario() == $usuario)
        {
            $this->usuario = $usuario;
            $this->passagem = $passagem;
        }
    }

    public function getUsuario(): Usuario {
        return $this->usuario;
    }

    public function getPassagem(): Passagem {
        return $this->passagem;
    }
}