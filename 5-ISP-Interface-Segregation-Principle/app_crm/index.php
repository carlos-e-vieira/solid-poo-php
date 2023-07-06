<?php

require __DIR__.'/vendor/autoload.php';

use App\Dao\ContratoModel;
use App\Dao\LeadModel;
use App\Dao\UsuarioModel;

$contratoModel = new ContratoModel();
print_r($contratoModel);
echo '<br>';

$leadModel = new LeadModel();
print_r($leadModel);
echo '<br>';

$usuarioModel = new UsuarioModel();
print_r($usuarioModel);
echo '<br>';
