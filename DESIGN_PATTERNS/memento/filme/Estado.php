<?php

class Estado
{
    function __construct(Filme $filme)
    {
        $this->filme = $filme;
    }

    function getPosicao()
    {
        return $this->filme;
    }
}