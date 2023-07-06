<?php

declare(strict_types=1);

namespace App\Dao;

use App\BD;
use App\Interfaces\CadastroInterface;
use App\Componentes\Log;
use App\Componentes\Notificacao;
use App\Interfaces\LogInterface;
use App\Interfaces\NotificacaoInterface;

class UsuarioModel extends BD implements CadastroInterface, LogInterface, NotificacaoInterface
{
    public function salvar() 
    {
        //lógica
    }

    public function registrarLog(Log $log)
    {
        //lógica
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {
        //lógica
    }
}
