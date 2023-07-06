<?php

require __DIR__.'/vendor/autoload.php';

use App\Poligono;
use App\Poligonos\Quadrado;
use App\Poligonos\Retangulo;

$poligono = new Poligono;
$poligono->setForma(new Retangulo);
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);
echo '<pre>';
print_r($poligono);
echo '</pre>';
echo '<h3>Área do retângulo: '. $poligono->getArea() .'</h3>';

echo '-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=';

$poligono = new Poligono;
$poligono->setForma(new Quadrado);
$poligono->getForma()->setLargura(10);
echo '<pre>';
print_r($poligono);
echo '</pre>';
echo '<h3>Área do quadrado: '. $poligono->getArea() .'</h3>';
