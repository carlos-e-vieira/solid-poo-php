<?php

declare(strict_types=1);

namespace App;

use App\Interfaces\MensagemTokenInterface;

class Whatsapp implements MensagemTokenInterface
{
    public function enviar(): void
    {
        echo 'Whatsapp: seu token é W-575-325';
    }
}
