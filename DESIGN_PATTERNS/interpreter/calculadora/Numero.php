<?php

class Numero implements Expressao
{
    function __construct($numero)
    {
        $this->numero = $numero;
    }

    function avalia()
    {
        return $this->numero;
    }
}