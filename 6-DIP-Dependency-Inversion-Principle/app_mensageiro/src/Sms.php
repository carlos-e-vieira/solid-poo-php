<?php

declare(strict_types=1);

namespace App;

use App\Interfaces\MensagemTokenInterface;

class Sms implements MensagemTokenInterface
{
    public function enviar(): void
    {
        echo 'SMS: seu token é 669-325';
    }
}
