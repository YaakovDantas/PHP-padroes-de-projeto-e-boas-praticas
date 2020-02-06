<?php

class Localidades
{
       
    function __construct() 
    {
        $this->casas = [];
    }

    function add(Local $casa)
    {
        return $this->casas[] = $casa;
    }

    function mostrar()
    {
        foreach ($this->casas as $casa) {
            echo "Numero: ".$casa->getNumero()."  Rua: ".$casa->getRua()."<br/>";
        };
    }
}