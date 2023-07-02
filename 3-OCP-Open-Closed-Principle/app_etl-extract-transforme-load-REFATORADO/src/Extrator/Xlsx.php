<?php

declare(strict_types=1);

namespace App\Extrator;

use App\Extrator\Arquivo;

class Xlsx extends Arquivo
{
    public function lerArquivo(string $caminho): array
    {
        //lógica para leitura

        return $this->getDados();
    }
}
