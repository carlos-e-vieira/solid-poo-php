<?php 

namespace App;

class Item
{
    private $descricao;
    private $valor;

    public function __construct()
    {
        $this->descricao = '';
        $this->valor = 0;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function setValor(float $valor): void
    {
        $this->valor = $valor;
    }

    public function itemValido(): bool
    {
        if ($this->descricao === '') {
            return false;
        }

        if ($this->valor <= 0) {
            return false;
        }

        return true;
    }
}
