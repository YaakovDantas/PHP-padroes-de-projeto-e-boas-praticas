<?php

Class Recebido implements Status
{
    function avanca(Pedido $pedido)
    {
        $pedido->setStatus(new Finalizado());
    }
}