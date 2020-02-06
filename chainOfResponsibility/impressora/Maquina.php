<?php

class Maquina
{
    function __construct($texto, $modelo)
    {
        $this->texto = $texto;
        $this->modelo = $modelo;
    }

    public function getTexto()
    {
        return $this->texto;
    }

    public function getModelo()
    {
        return $this->modelo;
    }
}