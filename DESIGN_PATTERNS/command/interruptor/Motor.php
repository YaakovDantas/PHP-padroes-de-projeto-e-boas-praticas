<?php

class Motor extends Interruptor
{
    
    function desligar()
    {
        echo "MOTOR: ".$this->nome." foi desligado <br/>";
    }
    
    function ligar()
    {
        echo "MOTOR: ".$this->nome." foi ligado <br/>";
    }
}