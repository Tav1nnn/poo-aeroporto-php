<?php

class Tripulante {
    
    public String $nome;
    public String $licenca;
    public String $cargo;

    public function __construct($nome, $licenca, $cargo) {
        $this->nome = $nome;
        $this->licenca = $licenca;
        $this->cargo = $cargo;
    }
}