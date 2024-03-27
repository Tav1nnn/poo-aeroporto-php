<?php

namespace otavio\PooAeroportoPhp;


class Tripulante extends Pessoa
{

    private String $licenca;
    private Cargo $cargo;

    public function __construct(string $nome, string $email, string $cpf, String $licenca, Cargo $cargo)
    {
        $this->licenca = $licenca;
        $this->cargo = $cargo;
        parent::__construct($nome, $email, $cpf);
    }

    public function getLicenca(): String
    {
        return $this->licenca;
    }

    public function getCargo(): Cargo
    {
        return $this->cargo;
    }

    public function setLicenca(String $licenca): void
    {
        $this->licenca = $licenca;
    }

    public function setCargo(Cargo $cargo): void
    {
        $this->cargo = $cargo;
    }
}
