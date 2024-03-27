<?php

namespace otavio\PooAeroportoPhp;

use DateTime;

class Voo
{
    private Aeroporto $destino;
    private Aeroporto $origem;
    private  array $escalas;
    private DateTime $horarioSaida;
    private DateTime $horarioChegada;
    private Aeronave $aeronave;
    private  array $tripulacao;
    private array $passageiros;

    public function __construct(Aeroporto $destino, Aeroporto $origem, DateTime $horarioSaida, DateTime $horarioChegada, Aeronave $aeronave)
    {
        $this->destino = $destino;
        $this->origem = $origem;
        $this->horarioSaida = $horarioSaida;
        $this->horarioChegada = $horarioChegada;
        $this->aeronave = $aeronave;
        $this->escalas = [];
        $this->tripulacao = [4];
        $this->passageiros = [$aeronave->getCapacidade() - 4];
    }


    public function calculaTempoVoo(): int
    {
        $diferenca = $this->horarioSaida->diff($this->horarioChegada);

        return ($diferenca->h * 60) + $diferenca->m;
    }

    public function adicionarEscala(Aeroporto $aeroporto)
    {
        if ($aeroporto != $this->origem || $aeroporto != $this->destino) {
            array_push($this->escalas, $aeroporto);
        }
    }

    public function removerEscala(Aeroporto $aeroporto)
    {
        $remover = array($aeroporto);
        $this->escalas = array_diff($this->escalas, $remover);
    }

    public function adicionarTripulante(Tripulante $tripulante): void
    {
        $contAeromoca = 0;
        $contPiloto = 0;
        $contCoPiloto = 0;

        foreach ($this->tripulacao as $tripulante) 
        {
            if ($tripulante->getCargo() === Cargo::AEROMOCA) 
            {
                $contAeromoca++;

            } elseif ($tripulante->getCargo() === Cargo::PILOTO)
            {
                $contPiloto ++;
            } else
            {
                $contCoPiloto++;
            }
        }

        if($tripulante->getCargo() === Cargo::AEROMOCA && $contAeromoca < 2)
        {
            array_push($tripulacao, $tripulante);
        } elseif($tripulante->getCargo() === Cargo::PILOTO && $contPiloto < 1)
        {
            array_push($tripulacao, $tripulante);
        } elseif ($contCoPiloto < 1)
        {
            array_push($tripulacao, $tripulante);
        }
    }

    public function removerTripulante(Tripulante $tripulante)
    {
    }

    public function adicionarPassageiro(Passagem $passageiro)
    {
    }

    public function removerPassageiro(Passagem $passageiro)
    {
    }

    public function getDestino(): Aeroporto
    {
        return $this->destino;
    }

    public function setDestino(Aeroporto $destino): void
    {
        $this->destino = $destino;
    }

    public function getOrigem(): Aeroporto
    {
        return $this->origem;
    }

    public function setOrigem(Aeroporto $origem): void
    {
        $this->origem = $origem;
    }

    public function getEscalas(): array
    {
        return $this->escalas;
    }

    public function getHorarioSaida(): DateTime
    {
        return $this->horarioSaida;
    }

    public function setHorarioSaida(DateTime $horarioSaida): void
    {
        $this->horarioSaida = $horarioSaida;
    }

    public function getHorarioChegada(): DateTime
    {
        return $this->horarioChegada;
    }

    public function setHorarioChegada(DateTime $horarioChegada): void
    {
        $this->horarioChegada = $horarioChegada;
    }

    public function getAeronave(): Aeronave
    {
        return $this->aeronave;
    }

    public function setAeronave(Aeronave $aeronave): void
    {
        $this->aeronave = $aeronave;
    }

    public function getTripulacao(): array
    {
        return $this->tripulacao;
    }

    public function setTripulacao(array $tripulacao): void
    {
        $this->tripulacao = $tripulacao;
    }

    public function getPassageiros(): array
    {
        return $this->passageiros;
    }

    public function setPassageiros(array $passageiros): void
    {
        $this->passageiros = $passageiros;
    }
}
