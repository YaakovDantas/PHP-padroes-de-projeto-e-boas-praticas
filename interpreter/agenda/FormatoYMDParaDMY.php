<?php

class FormatoYMDParaDMY implements Expressao
{
    function __construct($ano, $mes, $dia)
    {
        $this->ano = $ano;
        $this->mes = $mes;
        $this->dia = $dia;
    }

    function avalia()
    {
        $ano = $this->ano->avalia();
        $mes = $this->mes->avalia();
        $dia = $this->dia->avalia();
        return "$dia/$mes/$ano";
    }
}