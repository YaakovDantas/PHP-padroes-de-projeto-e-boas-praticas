<?php

Class Novo implements Status
{
    function avanca(Pedido $pedido)
    {
        $pedido->setStatus(new Enviado());
    }
}