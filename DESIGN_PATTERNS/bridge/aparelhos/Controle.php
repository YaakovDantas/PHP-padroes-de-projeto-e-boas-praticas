<?php

abstract class Controle
{
    function __construct(Aparelho $aparelho)
    {
        $this->aparelho = $aparelho;
    }

    function ligar()
    {
        $this->aparelho->ligar();
    }

    function botaoInput()
    {
        $this->aparelho->botaoInput();
    }

    abstract function x();
    
}