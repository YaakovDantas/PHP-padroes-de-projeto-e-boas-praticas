<?php

class Luz extends Interruptor
{
    
    function desligar()
    {
        echo "LUZ: ".$this->nome." foi desligado <br/>";
    }
    
    function ligar()
    {
        echo "LUZ: ".$this->nome." foi ligado <br/>";
    }
}