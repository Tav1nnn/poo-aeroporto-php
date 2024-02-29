<?php

require_once 'Usuario.php';

class Bagagem {
    private float $peso;
    private int $numBagagem;
    private Usuario $usuario;

    function __construct () {
        
    }

    public function getPeso(): float {
        return $this->peso;
    }

    public function setPeso(float $peso): void {
        $this->peso = $peso;
    }

    public function getNumBagagem(): int {
        return $this->numBagagem;
    }

    public function setNumBagagem(int $numBagagem): void {
        $this->numBagagem = $numBagagem;
    }

    public function getUsuario(): Usuario {
        return $this->usuario;
    }

    public function setUsuario(Usuario $usuario): void {
        $this->usuario = $usuario;
    }
}