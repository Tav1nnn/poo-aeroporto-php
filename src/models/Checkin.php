<?php

namespace otavio\PooAeroportoPhp;

class Checkin
{
    private Usuario $usuario;
    private Passagem $passagem;

    public function __construct(Usuario $usuario, Passagem $passagem)
    {
        $this->usuario = $usuario;
        $this->passagem = $passagem;
    }


    public  function validar(Usuario $usuario, Passagem $passagem):bool
    {
        return $passagem->getUsuario() == $usuario;
    }

    public function getUsuario(): Usuario
    {
        return $this->usuario;
    }

    public function getPassagem(): Passagem
    {
        return $this->passagem;
    }
}
