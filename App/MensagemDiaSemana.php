<?php 

namespace App;
include("App/MensagemInterface.php");

class MensagemDiaSemana {

    private $mensagem;
  
    function __construct (MensagemInterface $mensagem) {
      $this->mensagem = $mensagem;
    }
  
    public function mensagem(): string {
      return $this->mensagem->retornaMensagem();
    }
}