<?php

class Temporada
{
    function __construct($numero, $epis)
    {
        $this->numero = $numero;
        $this->epis = $epis;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getEpis()
    {
        return $this->epis;
    }
}