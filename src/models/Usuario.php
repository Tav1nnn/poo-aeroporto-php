<?php

namespace otavio\PooAeroportoPhp;

class Usuario extends Pessoa
{
    private string $cidade;
    private string $endereco;

    public function __construct(string $nome, string $email, string $cpf, string $cidade, string $endereco)
    {
        $this->cidade = $cidade;
        $this->endereco = $endereco;
        parent::__construct($nome, $email,$cpf);
    }
}
