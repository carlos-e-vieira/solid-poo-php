<?php

declare(strict_types=1);

namespace App\Dao;

use App\BD;
use App\Interfaces\CadastroInterface;
use App\Componentes\Notificacao;
use App\Interfaces\NotificacaoInterface;

class LeadModel extends BD implements CadastroInterface, NotificacaoInterface
{
    public function salvar() 
    {
        //lógica
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {
        //lógica
    }
}
