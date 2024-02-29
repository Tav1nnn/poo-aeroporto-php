<?php

class Tripulante {
    
    private String $nome;
    private String $licenca;
    private String $cargo;

    public function __construct () {
        
    }

    public function setNome (string $nome):void {
        $this->nome = $nome;
    }

    public function getNome ():string {
        return $this->nome;
    }

    public function setLicenca (string $licenca):void {
        $this->licenca = $licenca;
    }

    public function getLicenca ():string {
        return $this->licenca;
    }

    public function setCargo (string $cargo):void {
        $this->cargo = $cargo;
    }

    public function getCargo ():string {
        return $this->cargo;
    }
}