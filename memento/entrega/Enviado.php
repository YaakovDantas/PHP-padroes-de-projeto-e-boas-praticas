<?php

Class Enviado implements Status
{
    function avanca(Pedido $pedido)
    {
        $pedido->setStatus(new Recebido());
    }
}