<?php

require_once 'Aeroporto.php';
require_once 'Aeroporto.php';
require_once 'Tripulante.php';
require_once 'Passagem.php';

class Voo {
    private Aeroporto $destino;
    private Aeroporto $origem;
    private $escalas = array(); 
    private DateTime $horarioSaida;
    private DateTime $horarioChegada;
    private Aeronave $aeronave;
    private $tripulacao = array();
    private $passageiros = array();
    private string $status;


    public function __construct() {
        
    }

    public function calculaTempoVoo ($horarioSaida, $horarioChegada) {

    }

    public function adicionarEscala (Aeroporto $aeropoto) {

    }

    public function removerEscala (Aeroporto $aeroporto) {

    }

    public function adicionarTripulante (Tripulante $tripulante) {

    }

    public function removerTripulante (Tripulante $tripulante) {
        
    }

    public function adicionarPassageiro (Passagem $passageiro) {

    }

    public function removerPassageiro (Passagem $passageiro) {
        
    }

    public function getDestino(): Aeroporto {
        return $this->destino;
    }

    public function setDestino(Aeroporto $destino): void {
        $this->destino = $destino;
    }

    public function getOrigem(): Aeroporto {
        return $this->origem;
    }

    public function setOrigem(Aeroporto $origem): void {
        $this->origem = $origem;
    }

    public function getEscalas(): array {
        return $this->escalas;
    }

    public function getHorarioSaida(): DateTime {
        return $this->horarioSaida;
    }

    public function setHorarioSaida(DateTime $horarioSaida): void {
        $this->horarioSaida = $horarioSaida;
    }

    public function getHorarioChegada(): DateTime {
        return $this->horarioChegada;
    }

    public function setHorarioChegada(DateTime $horarioChegada): void {
        $this->horarioChegada = $horarioChegada;
    }

    public function getAeronave(): Aeronave {
        return $this->aeronave;
    }

    public function setAeronave(Aeronave $aeronave): void {
        $this->aeronave = $aeronave;
    }

    public function getTripulacao(): array {
        return $this->tripulacao;
    }

    public function setTripulacao(array $tripulacao): void {
        $this->tripulacao = $tripulacao;
    }

    public function getPassageiros(): array {
        return $this->passageiros;
    }

    public function setPassageiros(array $passageiros): void {
        $this->passageiros = $passageiros;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function setStatus(string $status): void {
        $this->status = $status;
    }
}