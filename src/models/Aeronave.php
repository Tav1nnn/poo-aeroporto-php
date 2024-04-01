<?php

namespace otavio\PooAeroportoPhp;

class Aeronave
{
    private string $modelo;
    private int $capacidade;
    private Status $status;

    public function __construct(string $modelo, int $capacidade)
    {
        $this->modelo = $modelo;
        $this->capacidade = $capacidade;
        $this->status = Status::DISPONIVEL;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getCapacidade(): int
    {
        return $this->capacidade;
    }

    public function getStatus(): Status
    {
        return $this->status;
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function setCapacidade(int $capacidade): void
    {
        $this->capacidade = $capacidade;
    }

    public function setStatus(Status $status): void
    {
        $this->status = $status;
    }

    public function __toString(): string
    {
        return sprintf("Aeronave {modelo : %s, capacidade : %d, status : %s}", 
        $this->modelo, $this->capacidade, $this->status->value);
    }
}
