<?php

namespace otavio\PooAeroportoPhp;

class Aeronave
{
    private string $modelo;
    private int $capacidade;
    private Status $status;

    public function __construct(string $modelo, int $capacidade, Status $status)
    {
        $this->modelo = $modelo;
        $this->capacidade = $capacidade;
        $this->status = $status;
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
}
