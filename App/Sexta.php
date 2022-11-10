<?php 

namespace App;

class Sexta implements MensagemInterface
{
  function retornaMensagem(): string {
    return "Tenha uma ótima sexta-feira";
  }
}
