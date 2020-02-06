<?php

class CalcularRN implements Visitor
{
    function visita(Imposto $imposto)
    {
        echo $imposto->getValor() * 0.2."<br/>";
    }
}