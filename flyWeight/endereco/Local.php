<?php

class Local
{
    function __construct($numero, $rua)
    {
        $this->numero = $numero;
        $this->rua  = $rua;
    }

    function getNumero()
    {
        return $this->numero;
    }

    function getRua()
    {
        return $this->rua;
    }
}