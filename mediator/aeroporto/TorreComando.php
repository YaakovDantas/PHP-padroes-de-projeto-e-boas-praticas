<?php

class TorreComando implements Mediator
{
    function __construct()
    {
        $this->horas = [];
        $this->nome = "Torre 7.2.C.Z";
    }

    function getNome()
    {
        return $this->nome;
    }

    function addHora($hora)
    {
        $this->horas[] = $hora;
    }

    function propostaSair(Colega $colega, $hora)
    {
        $msg = "$this->nome informa para {$colega->getNome()}:";
        if (in_array($hora, $this->horas)) {
            $colega->receber($msg." Não podemos decolar no momento, tem um voo chegando as $hora <br/>");
        } else {
            $colega->receber($msg. " Confirmado as $hora, pista liberada para decolagem <br/>");
        }
    }

    function propostaChegar(Colega $colega, $hora)
    {
        $msg = "$this->nome informa para {$colega->getNome()}:";
        if (in_array($hora, $this->horas)) {
            $colega->receber($msg." Não podemos pousar no momento, tem um voo saindo as $hora <br/>");
        } else {
            $colega->receber($msg." Confirmado as $hora, pista liberada para pouso <br/>");
        }
    }
}
