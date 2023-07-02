<?php

use App\Item;
use PHPUnit\Framework\TestCase;

class ItemTeste extends TestCase
{
    // https://docs.phpunit.de/en/8.5/assertions.html#assertarrayhaskey
    public function testEstadoInicialItem(): void
    {
        $item = new Item();

        $this->assertEquals($item->getDescricao(), '');
        $this->assertEquals($item->getValor(), 0);
    }

    public function testGetAndSetDescricao(): void
    {
        $descricao = 'Arroz Doce';

        $item = new Item();
        $item->setDescricao($descricao);

        $this->assertEquals($descricao, $item->getDescricao());
    }

    public function testGetAndSetValor(): void
    {
        $valor = 20.01;

        $item = new Item();
        $item->setValor($valor);

        $this->assertEquals($valor, $item->getValor());
    }

    public function testItemInvalid(): void
    {
        $item = new Item();

        // item válido
        $item->setValor(55);
        $item->setDescricao('Arroz Doce');
        $this->assertEquals(true, $item->itemValido());

        // item inválido (descrição)
        $item->setValor(55);
        $item->setDescricao('');
        $this->assertEquals(false, $item->itemValido());

        // item inválido (valor)
        $item->setValor(0);
        $item->setDescricao('Arroz Doce');
        $this->assertEquals(false, $item->itemValido());

        // item inválido (todos atributos)
        $item->setValor(0);
        $item->setDescricao('');
        $this->assertEquals(false, $item->itemValido());
    }

    /**
     * @dataProvider dataValores
    */
    public function testGeteSetValor($valor)
    {
        $item = new Item();
        $item->setValor($valor);
        $this->assertEquals($valor, $item->getValor());
    }

    // data provider
    public function dataValores(): array
    {
        return [
            [100],
            [-2],
            [0],
            [56]
        ];
    }
}
