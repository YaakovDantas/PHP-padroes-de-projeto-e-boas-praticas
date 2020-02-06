<?php

class CarroAdapter implements Inimigo
{
    function __construct(InimigoCarro $carro)
    {
        $this->carro = $carro;
    }

    function andar()
    {
        $this->carro->dirigir();
    }
    
    function atirar(String $string)
    {
        $this->carro->passarPorCima($string);
    }
    
    function morrer()
    {
        $this->carro->destruir();
    }
}