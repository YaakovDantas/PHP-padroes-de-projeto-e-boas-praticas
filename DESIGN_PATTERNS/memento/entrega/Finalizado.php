<?php

Class Finalizado implements Status
{
    function avanca(Pedido $pedido)
    {
        throw new Exception("Pedido já entregue.");
    }
}