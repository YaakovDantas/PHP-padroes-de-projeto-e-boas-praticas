<?php

class Piloto extends Colega
{
    function subir($hora)
    {
        $this->torre->propostaSair($this, $hora);
    }

    function descer($hora)
    {
        $this->torre->propostaChegar($this, $hora);
    }

    function receber($msg)
    {
        echo "$msg <br>";
    }
}