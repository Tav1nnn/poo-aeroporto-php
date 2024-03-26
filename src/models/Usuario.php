<?php

namespace otavio\PooAeroportoPhp;

class Usuario extends Pessoa
{
    private string $senha;
    private bool $isAdm;

    public function __construct(string $senha)
    {
        $this->senha = $senha;
        $this->isAdm = null;
    }

    public function getSenha(): string {return $this->senha;}

	public function getIsAdm(): bool {return $this->isAdm;}

	public function setSenha(string $senha): void {$this->senha = $senha;}

	public function setIsAdm(bool $isAdm): void {$this->isAdm = $isAdm;}

	
}
