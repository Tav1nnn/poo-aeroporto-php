<?php

namespace otavio\PooAeroportoPhp;

class Checkin
{
    private Usuario $usuario;
    private Passagem $passagem;
    private Bagagem $bagagem;

    public function __construct(Usuario $usuario, Passagem $passagem, Bagagem $bagagem)
    {
        $this->usuario = $usuario;
        $this->passagem = $passagem;
        $this->bagagem = $bagagem;
    }

    public  function validar(Usuario $usuario, Passagem $passagem, Bagagem $bagagem): bool
    {
        return $passagem->getUsuario() == $usuario && $bagagem->getUsuario() == $usuario;
    }

    public function getUsuario(): Usuario
    {
        return $this->usuario;
    }

    public function getPassagem(): Passagem
    {
        return $this->passagem;
    }

    public function getBagagem(): Bagagem
    {
        return $this->bagagem;
    }

    public function __toString(): string
    {
        return sprintf(
            "Reserva:{\nUsuario: %s\nPassagem: %s\nBagagem: %s}",
            $this->usuario,
            $this->passagem,
            $this->bagagem
        );
    }
}
