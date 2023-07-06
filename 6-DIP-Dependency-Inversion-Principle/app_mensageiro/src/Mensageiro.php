<?php

declare(strict_types=1);

namespace App;

use App\Interfaces\MensagemTokenInterface;

class Mensageiro
{
    private $canal;

    public function __construct(MensagemTokenInterface $canal)
    {
        $this->setCanal($canal);
    }

    public function getCanal(): MensagemTokenInterface
    {
        return $this->canal;
    }

    public function setCanal(MensagemTokenInterface $canal): void
    {
        $this->canal = $canal;
    }

    public function enviarToken(): void
    {
        $this->getCanal()->enviar();

        /*
        $classe = '\App\\' . ucfirst($this->getCanal());

        $obj = new $classe;
        $obj->enviar();
        */
    }
}
