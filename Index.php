
<?php

include("App/MensagemDiaSemana.php");
include("App/FimSemana.php");

use App\MensagemDiaSemana;
use App\FimSemana;

$mensagemDiaSemana = new MensagemDiaSemana(new FimSemana());

print_r($mensagemDiaSemana->mensagem());


