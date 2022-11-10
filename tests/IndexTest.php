<?php

include("App/MensagemDiaSemana.php");
include("App/Segunda.php");
include("App/Terca.php");
include("App/Quarta.php");
include("App/Quinta.php");
include("App/Sexta.php");
include("App/FimSemana.php");

use PHPUnit\Framework\TestCase;
use App\MensagemDiaSemana;
use App\Segunda;
use App\FimSemana;
use App\Quarta;
use App\Quinta;
use App\Sexta;
use App\Terca;

class IndexTest extends TestCase {

    public function testSegunda() {
        $mensagemDiaSemana = new MensagemDiaSemana(new Segunda());

        $this->assertEquals("Tenha uma ótima segunda-feira", $mensagemDiaSemana->mensagem());
    }
    
    public function testTerca() {
        $mensagemDiaSemana = new MensagemDiaSemana(new Terca());

        $this->assertEquals("Tenha uma ótima terça-feira", $mensagemDiaSemana->mensagem());
    }

    public function testQuarta() {
        $mensagemDiaSemana = new MensagemDiaSemana(new Quarta());

        $this->assertEquals("Tenha uma ótima quarta-feira", $mensagemDiaSemana->mensagem());
    }

    public function testQuinta() {
        $mensagemDiaSemana = new MensagemDiaSemana(new Quinta());

        $this->assertEquals("Tenha uma ótima quinta-feira", $mensagemDiaSemana->mensagem());
    }

    public function testSexta() {
        $mensagemDiaSemana = new MensagemDiaSemana(new Sexta());

        $this->assertEquals("Tenha uma ótima sexta-feira", $mensagemDiaSemana->mensagem());
    }

    public function testFimSemana() {
        $mensagemDiaSemana = new MensagemDiaSemana(new FimSemana());

        $this->assertEquals("Tenha um ótimo fim de semana", $mensagemDiaSemana->mensagem());
    }
}