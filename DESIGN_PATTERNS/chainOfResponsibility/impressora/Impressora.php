<?php 

abstract class Impressora
{
    abstract function imprimir(Maquina $maquina);

    protected function imprimirTexto($texto)
    {
        return "IMPRESSORA: $texto";
    }
}