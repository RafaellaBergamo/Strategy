<?php 

namespace App;

class Quinta implements MensagemInterface
{
  function retornaMensagem(): string {
    return "Tenha uma ótima quinta-feira";
  }
}
