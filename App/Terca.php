<?php 

namespace App;

class Terca implements MensagemInterface
{
  function retornaMensagem(): string {
    return "Tenha uma ótima terça-feira";
  }
}
