<?php

class Flyweight 
{

    function __construct() 
    {
        $this->locais = [];
    }  

    function pegar($numero, $rua) 
    {
        if (array_key_exists($numero, $this->locais)) {
            // echo "APROVEITANDO <br/>";
            return $this->locais[$numero];
        } else {
            // echo "CRIANDO <br/>";
            $local = $this->fazerLocal($numero, $rua); 
            $this->locais[$numero] = $local;
            return $local;
        }
    }    

    function fazerLocal($numero, $rua) 
    {
       
        $local = new Local($numero, $rua); 
        return $local;
    }

}