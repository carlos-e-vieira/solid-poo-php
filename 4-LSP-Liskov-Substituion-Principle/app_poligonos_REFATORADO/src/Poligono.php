<?php

declare(strict_types=1);

namespace App;

class Poligono
{
    private $forma;

    public function setForma(object $forma): void
    {
        $this->forma = $forma;
    }

    public function getForma(): object
    {
        return $this->forma;
    }

    public function getArea()
    {
        return $this->getForma()->getLargura() * $this->getForma()->getAltura();
    }
}
