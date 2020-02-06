<?php

abstract class Colega
{
    function __construct($nome, $hora, $torre)
    {
        $this->nome = $nome;
        $this->hora = $hora;
        $this->torre = $torre;
    }

    function getHora()
    {
        return $this->hora;
    }

    function getNome()
    {
        return $this->nome;
    }
}