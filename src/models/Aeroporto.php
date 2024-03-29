<?php

namespace otavio\PooAeroportoPhp;

class Aeroporto
{

    private string $nome;
    private string $codigoIATA;
    private string $cep;
    private string $endereco;
    private int $numPistas;
    private int $pistaDisponivel;
    private array $voos;

    public function __construct(string $nome, string $codigoIATA, string $cep, string $endereco, int $numPistas, int $pistaDisponivel)
    {
        $this->nome = $nome;
        $this->codigoIATA = $codigoIATA;
        $this->cep = $cep;
        $this->endereco = $endereco;
        $this->numPistas = $numPistas;
        $this->pistaDisponivel = $pistaDisponivel;
        $this->voos = [];
    }


    public function adicionarVoo(Voo $voo): void
    {
    }

    public function removerVoo(Voo $voo): void
    {
    }

    public function reservarPista(): void
    {
    }

    public function cancelarReservaPista(): void
    {
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getCodigoIATA(): string
    {
        return $this->codigoIATA;
    }

    public function setCodigoIATA(string $codigoIATA): void
    {
        $this->codigoIATA = $codigoIATA;
    }

    public function getCep(): string
    {
        return $this->cep;
    }

    public function setCep(string $cep): void
    {
        $this->cep = $cep;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function setEndereco(string $endereco): void
    {
        $this->endereco = $endereco;
    }

    public function getNumPistas(): int
    {
        return $this->numPistas;
    }

    public function setNumPistas(int $numPistas): void
    {
        $this->numPistas = $numPistas;
    }

    public function getPistaDisponivel(): int
    {
        return $this->pistaDisponivel;
    }

    public function setPistaDisponivel(int $pistaDisponivel): void
    {
        $this->pistaDisponivel = $pistaDisponivel;
    }

    public function getVoos()
    {
        return $this->voos;
    }

    public function setVoos($voos): void
    {
        $this->voos = $voos;
    }
}
