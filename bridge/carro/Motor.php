<?php

abstract class Motor
{
    function __construct(Carro $carro)
    {
        $this->carro = $carro;
    }
    
    abstract function darPartida();

    function ligar()
    {
        $this->carro->ligar();
    }

    function frear()
    {
        $this->carro->frear();
    }

    function guiar()
    {
        $this->carro->guiar();
    }
}