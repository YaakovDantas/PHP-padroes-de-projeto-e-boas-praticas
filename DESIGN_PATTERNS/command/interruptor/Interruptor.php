<?php

abstract class Interruptor
{
    function __construct($nome)
    {
        $this->nome = $nome;
    }

    function getNome()
    {
        return $this->nome;
    }

    abstract function desligar();
    abstract function ligar();
}