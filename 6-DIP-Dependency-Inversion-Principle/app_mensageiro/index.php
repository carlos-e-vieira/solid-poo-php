<?php

require __DIR__.'/vendor/autoload.php';

use App\Mensageiro;
use App\Email;
use App\Sms;
use App\Whatsapp;

$msg = new Mensageiro(new Email());
$msg->enviarToken();

echo '<br><br>';

//----- canal sms
$msg2 = new Mensageiro(new Sms());
$msg2->enviarToken();

echo '<br><br>';

//----- canal whatsapp
$msg3 = new Mensageiro(new Whatsapp());
$msg3->enviarToken();

/*
//----- canal email
$msg = new Mensageiro();
$msg->setCanal('email');
$msg->enviarToken();

echo '<br><br>';

//----- canal sms
$msg2 = new Mensageiro();
$msg2->setCanal('sms');
$msg2->enviarToken();
*/
