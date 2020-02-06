<?php

class Armazenador
{
    function __construct()
    {
        $this->historico = [];
    }

    function addEstado(Estado $estado)
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