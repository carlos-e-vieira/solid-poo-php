<?php

namespace App;

class CarrinhoCompra
{
    private $itens;
    private $status;
    private $valorTotal;

    public function __construct()
    {
        $this->itens = [];
        $this->status = 'aberto';
        $this->valorTotal = 0;
    }

    public function exibirItens(): array
    {
        return $this->itens;
    }

    public function adicionarItem(string $item, float $valor): bool
    {
        array_push($this->itens, ['item' => $item, 'valor' => $valor]);
        $this->valorTotal += $valor;
        return true;
    }

    public function exibirValorTotal()
    {
        return $this->valorTotal;
    }

    public function exibirStatus()
    {
        return $this->status;
    }

    public function confirmarPedido()
    {
        if ($this->validadeCarrinho()) {
            $this->status = 'confirmado';
            $this->enviarEmailConfirmacao();

            return true;
        }

         return false;
    }

    public function enviarEmailConfirmacao()
    {
        echo '<br>... envia e-mail de confirmação ...<br>';
    }

    public function validadeCarrinho(): bool
    {
        return count($this->itens) > 0;
    }
}
