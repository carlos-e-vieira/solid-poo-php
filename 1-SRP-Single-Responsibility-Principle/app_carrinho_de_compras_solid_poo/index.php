<?php

require __DIR__."/vendor/autoload.php";

use App\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();

echo '<h3>Sem SRP</h3>';
print_r($carrinho1->exibirItens());
echo 'Valor total: ' . $carrinho1->exibirValorTotal();

// $carrinho1->adicionarItem('Notebook', 1200.00);
// $carrinho1->adicionarItem('Geladeira', 780.20);
// $carrinho1->adicionarItem('Carro', 120000.90);

echo '<br>';
print_r($carrinho1->exibirItens());
echo 'Valor total recalculado: '  . $carrinho1->exibirValorTotal();

echo '<br>';
echo 'status: ' .$carrinho1->exibirStatus();

$carrinho1->adicionarItem('Carro', 10.000);

echo '<br>';
if ($carrinho1->confirmarPedido()) {
    echo 'Pedido realizado com sucesso!';
} else {
    echo 'Erro na confirmação do pedido. Carrinho não possui itens';
}

echo '<br>';
echo 'status: ' .$carrinho1->exibirStatus();