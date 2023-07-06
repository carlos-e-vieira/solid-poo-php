<?php

declare(strict_types=1);

namespace App\Interfaces;

use App\Componentes\Notificacao;

interface NotificacaoInterface
{
    public function enviarNotificacao(Notificacao $notificacao);
}
