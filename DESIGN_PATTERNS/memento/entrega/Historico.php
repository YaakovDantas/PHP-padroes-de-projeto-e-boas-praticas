<?php

class Historico
{
    function __construct()
    {
        $this->historico = [];
    }

    function addHistorico(Estado $estado)
    {
        $this->historico[] = $estado;
    }

    function getEstado($index)
    {
        return $this->historico[$index];
    }

    function mostrar()
    {
        foreach($this->historico as $h) {
            var_dump($h);
        }
    }
}