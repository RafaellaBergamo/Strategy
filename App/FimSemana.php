<?php 

namespace App;

class FimSemana implements MensagemInterface
{
  function retornaMensagem(): string {
    return "Tenha um ótimo fim de semana";
  }
}
