<?php 

namespace App;

class Segunda implements MensagemInterface
{
  function retornaMensagem(): string {
    return "Tenha uma ótima segunda-feira";
  }
}