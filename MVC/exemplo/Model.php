<?php

class Model
{
    private $resultado;

    function calcularResultado($num1, $num2)
    {
        $this->resultado = $num1 + $num2;
    }

    function getResultado()
    {
        return $this->resultado;
    }

}