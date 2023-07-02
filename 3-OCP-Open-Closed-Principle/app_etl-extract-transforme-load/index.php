<?php

require __DIR__.'/vendor/autoload.php';

use App\Leitor;

// ------------- TXT --------------------------
$leitorTXT =  new Leitor;
$leitorTXT->setDiretorio(__DIR__. '/arquivos');
$leitorTXT->setArquivo('dados.txt');
$arrayTXT = $leitorTXT->lerArquivo();

// ------------- CSV --------------------------
$leitorCSV =  new Leitor;
$leitorCSV->setDiretorio(__DIR__. '/arquivos');
$leitorCSV->setArquivo('dados.csv');
$arrayCSV = $leitorCSV->lerArquivo();

// ------------- ARRAY MERGE ------------------
echo '<pre>';
print_r(array_merge($arrayCSV, $arrayTXT));
echo '</pre>';