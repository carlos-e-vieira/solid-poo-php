<?php

namespace App;

class CarrinhoCompra
{
    private $itens;

    public function __construct()
    {
        $this->itens = [];
    }

    public function getItens(): array
    {
        return $this->itens;
    }

    public function adicionarItem($item): bool
    {
        array_push($this->itens, $item);
        return true;
    }

    public function validarCarrinhoCompra(): bool
    {
        return count($this->itens) > 0;
    }
}
