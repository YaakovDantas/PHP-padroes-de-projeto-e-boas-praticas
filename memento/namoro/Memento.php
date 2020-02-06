<?php

class Memento
{
    function __construct($relacao)
    {
        $this->relacao = $relacao;
    }

    function getRelacao()
    {
        return $this->relacao;
    }
}