<?php

require __DIR__."/vendor/autoload.php";

use App\CarrinhoCompra;
use App\Item;
use App\Pedido;
use App\EmailService;

echo '<h3>Com SRP - Single Responsibility Principle</h3><br>';

$pedido = new Pedido();

//---------- Cadastrar Itens ---------------
$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('Porta Copos');
$item1->setValor(12.25);

$item2->setDescricao('Caneca Nerd');
$item2->setValor(28.74);

//-------------------------
echo '<h4>Pedido</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';

//---------- Adicionar Itens ao Carrinho ---------------
$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);

//---------- Pedido com Itens ---------------
echo '<h4>Pedido com Itens</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';

//---------- Itens do Carrinho ---------------
echo '<h4>Itens do Carrinho</h4>';
echo '<pre>';
print_r($pedido->getCarrinhoCompra()->getItens());
echo '</pre>';

//---------- Valor do Pedido ---------------
echo '<h4>Valor do Pedido</h4>';
$total = 0;
foreach ($pedido->getCarrinhoCompra()->getItens() as $key => $item) {
    $total += $item->getValor();
}
echo $total;

//---------- Carrinho está válido? ---------------
echo '<h4>Carrinho está válido?</h4>';
echo $pedido->getCarrinhoCompra()->validarCarrinhoCompra();

//---------- Status do Pedido ---------------
echo '<h4>Status do Pedido</h4>';
echo $pedido->getStatus();

//---------- Confirmar Pedido ---------------
echo '<h4>Confirmar Pedido</h4>';
echo $pedido->confirmar();

//---------- Status do Pedido ---------------
echo '<h4>Status do Pedido</h4>';
echo $pedido->getStatus();

//---------- Email ---------------
echo '<h4>Email</h4>';
if ($pedido->getStatus() === 'confirmado') {
    echo EmailService::dispararEmail();
}