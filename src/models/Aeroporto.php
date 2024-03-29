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

    public function __construct(string $nome, string $codigoIATA, string $cep, string $endereco, int $numPistas)
    {
        $this->nome = $nome;
        $this->codigoIATA = $codigoIATA;
        $this->cep = $cep;
        $this->endereco = $endereco;
        $this->numPistas = $numPistas;
        $this->pistaDisponivel = $numPistas;
        $this->voos = [];
    }


    public function adicionarVoo(Voo $voo): void
    {
        if($this->pistaDisponivel > 0)
        {
            array_push($this->voos, $voo);
            $this->pistaDisponivel--;
        }
    }

    public function removerVoo(Voo $voo): void
    {
        $index = array_search($voo, $this->voos, true);
        if ($index !== false) {
            unset($this->voos[$index]);
            $this->pistaDisponivel++;
        }
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
       if($numPistas > $this->numPistas - $this->pistaDisponivel)
       {
            $this->pistaDisponivel = $numPistas - ($this->numPistas - $this->pistaDisponivel);
            $this->numPistas = $numPistas;
       }
    }

    public function getPistaDisponivel(): int
    {
        return $this->pistaDisponivel;
    }

    public function getVoos()
    {
        return $this->voos;
    }
}
