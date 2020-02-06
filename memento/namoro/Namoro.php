<?php

class Namoro
{
    function __construct($relacao)
    {
        $this->relacao = $relacao;
    }

    function getRelacao()
    {
        return $this->relacao;
    }

    function notificar()
    {
        return "Relacao do relacionamento: ".$this->relacao."<br/>";    
    }

    function setRelacao($relacao)
    {
        $this->relacao = $relacao;
    }
    
    function salvarRelacao()
    {
        return new Memento($this->relacao);
    }

    function voltarRelacao(Memento $memento)
    {
        $this->setRelacao($memento->getRelacao());
    }
}