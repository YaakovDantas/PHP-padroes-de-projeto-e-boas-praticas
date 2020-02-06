<?php

class FinalizaCommand implements Command
{
    function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    function execute()
    {
        echo $this->pedido->getNome()." foi finalizado <br/>";
        $this->pedido->finaliza();
    }
}