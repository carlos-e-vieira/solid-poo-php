<?php

declare(strict_types=1);

namespace App;

use App\Interfaces\MensagemTokenInterface;

class Email implements MensagemTokenInterface
{
    public function enviar(): void
    {
        echo 'Email: seu token é 575-325';
    }
}
