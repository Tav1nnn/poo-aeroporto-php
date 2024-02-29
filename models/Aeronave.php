<?php

class Aeronave {
    private string $modelo;
    private int $capacidade;
    private string $status;

    public function __construct() {
        
    }
    
    public function setModelo (string $modelo):void {
        $this->modelo = $modelo;
    }

    public function getModelo ():string {
        return $this->modelo;
    }

    public function setCapacidade (int $capacidade) {
        $this->capacidade = $capacidade;
    }

    public function getCapacidade ():int {
        return $this->capacidade;
    }

    public function editarStatus (string $status): void {
        if ($status == 'MANUTENÇÃO' ||
            $status == 'LIVRE' ||
            $status == 'INATIVO'
        ) {
            $this->status = $status;
        } 

    }

    public function getStatus ():string {
        return $this->status;
    }
}