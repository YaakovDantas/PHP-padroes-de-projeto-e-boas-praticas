<?php

class InimigoCarro
{
    function dirigir()
    {
        echo "O carro está em movimento";
    }
    
    function passarPorCima(String $string)
    {
        echo "Carro tenta passar por cima de $string";
    }
    
    function destruir()
    {
        echo "Carro foi destruido";
    }
}