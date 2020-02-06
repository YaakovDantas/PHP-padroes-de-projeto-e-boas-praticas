<?php

abstract class Produto implements Visitavel
{
    function __construct($valor)
    {
        $this->valor =  $valor;
    }

    function getValor()
    {
        return $this->valor;
    }

    function aceita(Visitor $visitor)
    {
        $visitor->visita($this);
    }
}