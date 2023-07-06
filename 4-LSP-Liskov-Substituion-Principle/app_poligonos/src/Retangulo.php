<?php

declare(strict_types=1);

namespace App;

class Retangulo
{
    protected $largura;

    protected $altura;

    public function getLargura(): float
    {
        return $this->largura;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }

    public function setLargura(float $largura): void
    {
        $this->largura = $largura;
    }

    public function setAltura(float $altura): void
    {
        $this->altura = $altura;
    }

    public function getArea(): float
    {
        return $this->getLargura() * $this->getAltura();
    }
}
