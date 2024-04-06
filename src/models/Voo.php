<?php

namespace otavio\PooAeroportoPhp;

use DateTime;

class Voo
{
    private string $codigo;
    private bool $statusVoo;
    private Aeroporto $destino;
    private Aeroporto $origem;
    private  array $escalas;
    private DateTime $horarioSaida;
    private DateTime $horarioChegada;
    private Aeronave $aeronave;
    private  array $tripulacao;
    private array $passageiros;

    public function __construct()
    {
        $this->statusVoo = true;
        $this->escalas=[];
        $this->tripulacao = [];
        $this->passageiros = [];
    }

    public function adicionarAeronave(Aeronave $aeronave): void
    {
        if ($aeronave->getStatus() === Status::DISPONIVEL && !isset($this->aeronave)) {
            $this->aeronave = $aeronave;
        }
    }

    public function adicionarOrigem(Aeroporto $aeroporto): void
    {
        if (
            isset($this->aeronave)
            && !isset($this->origem)
            && !isset($this->destino)
            && $aeroporto->getPistaDisponivel() > 0
        ) {
            $this->origem = $aeroporto;
            $this->origem->adicionarVoo($this);
        }
    }

    public function adicionarDestino(Aeroporto $aeroporto): void
    {
        if (
            isset($this->aeronave)
            && isset($this->origem)
            && $this->origem != $aeroporto
            && $aeroporto->getPistaDisponivel() > 0
        ) {
            $this->destino = $aeroporto;
            $aeroporto->adicionarVoo($this);
        }
    }

    public function cancelarVoo(): void
    {
        $this->statusVoo = false;
        $this->origem->removerVoo($this);
        $this->destino->removerVoo($this);

        foreach($this->escalas as $escala)
        {
            $escala->removerVoo($this);
        }
    }

    public function calculaTempoVoo(): String
    {
        if (isset($this->horarioSaida) && isset($this->horarioChegada)) {
            $diferenca = $this->horarioSaida->diff($this->horarioChegada);
            return ($diferenca->h * 60) + $diferenca->m . " minutos";
        }

        return null;
    }

    public function adicionarEscala(Aeroporto $aeroporto): void
    {
        if ($aeroporto != $this->origem 
            && $aeroporto != $this->destino
            && $aeroporto->getPistaDisponivel()>0) {

            array_push($this->escalas, $aeroporto);
            $aeroporto->adicionarVoo($this);
        }
    }

    public function removerEscala(Aeroporto $aeroporto)
    {
        $index = array_search($aeroporto, $this->escalas, true);
        unset($this->escalas[$index]);
        $aeroporto->removerVoo($this);
    }


    private function verificarTripulacao(): array
    {
        $contAeromoca = 0;
        $contPiloto = 0;
        $contCoPiloto = 0;

        $qtdTripulacao = [];

        foreach ($this->tripulacao as $tripulante) {
            if ($tripulante->getCargo() === Cargo::AEROMOCA) {
                $contAeromoca++;
            } elseif ($tripulante->getCargo() === Cargo::PILOTO) {
                $contPiloto++;
            } else {
                $contCoPiloto++;
            }
        }

        array_push($qtdTripulacao, $contAeromoca);
        array_push($qtdTripulacao, $contPiloto);
        array_push($qtdTripulacao, $contCoPiloto);

        return $qtdTripulacao;
    }

    public function adicionarTripulante(Tripulante $tripulante): void
    {
       $qtdTripulacao = $this->verificarTripulacao();

        if ($tripulante->getCargo() == Cargo::AEROMOCA && $qtdTripulacao[0] < 2) 
        {
            array_push($this->tripulacao, $tripulante);
        } elseif ($tripulante->getCargo() == Cargo::PILOTO && $qtdTripulacao[1] < 1) 
        {
            array_push($this->tripulacao, $tripulante);
        } elseif ($tripulante->getCargo() == Cargo::COPILOTO && $qtdTripulacao[2] < 1) 
        {
            array_push($this->tripulacao, $tripulante);
        }
    }

    public function removerTripulante (Tripulante $tripulante): void
    {
        $index = array_search($tripulante, $this->tripulacao, true);
        unset($this->tripulacao[$index]);
    }

    public function adicionarPassageiro(Usuario $passageiro)
    {
        array_push($this->passageiros, $passageiro);
    }

    public function removerPassageiro(Usuario $usuario)
    {
        $index = array_search($usuario, $this->passageiros, true);
        unset($this->passageiros[$index]);
    }

    public function prepararParaVoo(): bool
    {
        $qtdTripulacao = $this->verificarTripulacao();

         return $this->statusVoo
            && $qtdTripulacao[0] == 2
            && $qtdTripulacao[1] == 1
            && $qtdTripulacao[2] == 1;
    }

    public function setCodigo(String $codigo)
    {
        $this->codigo = $codigo;
    }

    public function setHorarioSaida(DateTime $horarioSaida): void
    {
        $this->horarioSaida = $horarioSaida;
    }

    public function setHorarioChegada(DateTime $horarioChegada): void
    {
        $this->horarioChegada = $horarioChegada;
    }

    public function getCodigo(): string
    {
        return $this->codigo;
    }

    public function getDestino(): Aeroporto
    {
        return $this->destino;
    }

    public function getOrigem(): Aeroporto
    {
        return $this->origem;
    }

    public function getEscalas(): array
    {
        return $this->escalas;
    }

    public function getHorarioSaida(): DateTime
    {
        return $this->horarioSaida;
    }

    public function getHorarioChegada(): DateTime
    {
        return $this->horarioChegada;
    }

    public function getAeronave(): Aeronave
    {
        return $this->aeronave;
    }

    public function getTripulacao(): array
    {
        return $this->tripulacao;
    }

    public function getPassageiros(): array
    {
        return $this->passageiros;
    }

    public function __toString(): string
    {
        return sprintf(
            "VOO {\nCODIGO: %s, \nSTATUSVOO: %s, \nDESTINO: %s, \nORIGEM: %s, \nESCALAS: %s, \nHORARIO-SAIDA: %s, \nHORARIO-CHEGADA: %s, \nAERONAVE: %s, \nTRIPULACAO: %s, \nPASSAGEIROS: %s\n}",
            $this->codigo,
            $this->statusVoo ? 'true' : 'false',
            $this->destino->getNome(),
            $this->origem->getNome(),
            $this->formatarAeroporto(),
            $this->horarioSaida->format('Y-m-d H:i:s'),
            $this->horarioChegada->format('Y-m-d H:i:s'),
            $this->aeronave->getModelo(),
            $this->formatarTripulante(),
            $this->formatarPassageiro()
        );
    }

    private function formatarAeroporto(): string
    {
        $aeroportoformatado = '';
        if(isset($this->escalas)){
            foreach($this->escalas as $escala)
            {
                $aeroportoformatado .= $escala->getNome(). ', ';
            }

            $aeroportoformatado = rtrim($aeroportoformatado, ', ');
        }
        
        return $aeroportoformatado;
    }

    private function formatarTripulante(): string
    {
        $tripulanteFormatado = '';
        foreach($this->tripulacao as $tripulante)
        {
            $tripulanteFormatado .= $tripulante->getNome() .  ', ';
        }
        $tripulanteFormatado = rtrim($tripulanteFormatado, ', ');

        return $tripulanteFormatado;
    }

    private function formatarPassageiro(): string
    {
        $passageiroFormatado = '';
        foreach($this->passageiros as $passageiro)
        {
            $passageiroFormatado .= $passageiro->getNome() . ', ';
        }
        $passageiroFormatado = rtrim($passageiroFormatado, ', ');

        return $passageiroFormatado;
    }
}
