<?php

class CalcularPB implements Visitor
{
    function visita(Imposto $imposto)
    {
        echo $imposto->getValor() * 0.5 ."<br/>";
    }
}