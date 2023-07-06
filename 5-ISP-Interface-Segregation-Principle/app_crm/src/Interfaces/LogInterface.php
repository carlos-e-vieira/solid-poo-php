<?php

declare(strict_types=1);

namespace App\Interfaces;

use App\Componentes\Log;

interface LogInterface
{
    public function registrarLog(Log $log);
}
