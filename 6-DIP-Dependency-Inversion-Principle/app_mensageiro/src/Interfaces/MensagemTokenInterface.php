<?php

declare(strict_types=1);

namespace App\Interfaces;

interface MensagemTokenInterface
{
    public function enviar(): void;
}