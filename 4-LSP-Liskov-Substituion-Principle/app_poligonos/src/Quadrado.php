<?php

declare(strict_types=1);

namespace App;

class Quadrado extends Retangulo
{
    // ferimos a tipagem forte de comportamento
    public function setLargura(float $largura): void
    {
        $this->largura = $largura;
        $this->altura = $largura;
    }

    public function setAltura(float $altura): void
    {
        $this->altura = $altura;
        $this->largura = $altura;        
    }
}
