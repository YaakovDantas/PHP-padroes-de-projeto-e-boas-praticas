<?php

class Item
{
    function __construct($nome)
    {
        $this->nome = $nome;
    }

    function getNome()
    {
        return $this->nome;
    }
}