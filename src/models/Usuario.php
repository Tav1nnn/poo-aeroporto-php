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
        parent::__construct($nome, $email, $cpf);
    }

    public function setCidade(string $cidade): void
    {
        $this->cidade = $cidade;
    }

    public function setEndereco(string $endereco): void
    {
        $this->endereco = $endereco;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function __toString(): string
    {
        return "Usuario ". json_encode([
            'nome' => $this->nome,
            'email' => $this->email,
            'cpf' => $this->cpf,
            'cidade' => $this->cidade,
            'endereco' => $this->endereco
        ]);
    }
}
