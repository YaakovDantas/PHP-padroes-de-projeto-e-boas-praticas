<?php

class Estado
{
    function __construct(Pessoa $pessoa)
    {
        $this->pessoa = $pessoa;
    }

    function getPosicao()
    {
        return $this->pessoa;
    }
}
