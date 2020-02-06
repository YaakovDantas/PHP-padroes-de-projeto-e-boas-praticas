<?php

abstract class Colega
{

    function __construct($nome, Mediator $mediator)
    {         
        $this->nome = $nome;
        $this->mediator = $mediator; 
    }

    function oferta($valor, Item $item)
    {
        
        $this->mediator->proposta($this, $valor, $item);
        
    }

    function getNome()
    {
        return $this->nome;
    }
}