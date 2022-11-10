<?php 

namespace App;

class Quarta implements MensagemInterface
{
  function retornaMensagem(): string {
    return "Tenha uma ótima quarta-feira";
  }
}
