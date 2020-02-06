<?php

class Estado
{
    function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    function getPosicao()
    {
        return $this->pedido;
    }
}