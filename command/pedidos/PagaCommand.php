<?php

class PagaCommand implements Command
{
    function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    function execute()
    {
        echo $this->pedido->getNome()." foi pago <br/>";
        $this->pedido->paga();
    }
}