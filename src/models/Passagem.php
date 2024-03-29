<?php

namespace otavio\PooAeroportoPhp;

class Passagem {
    private string $codBilhete;
    private float $valor;
    private Voo $voo;
    private Usuario $usuario;

    public function __construct() {

    }

     public function getCodBilhete(): string {
        return $this->codBilhete;
    }

   
    public function setCodBilhete(string $codBilhete): void {
        $this->codBilhete = $codBilhete;
    }

    public function getValor(): float {
        return $this->valor;
    }

    public function setValor(float $valor): void {
        $this->valor = $valor;
    }

    public function getVoo(): Voo {
        return $this->voo;
    }

    public function setVoo(Voo $voo): void {
        $this->voo = $voo;
    }

    public function getUsuario(): Usuario {
        return $this->usuario;
    }

    public function setUsuario(Usuario $usuario): void {
        $this->usuario = $usuario;
    }
}