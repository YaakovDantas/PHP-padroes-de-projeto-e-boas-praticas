<?php

class Item
{
    function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getValor()
    {
        return $this->valor;
    }
    
}