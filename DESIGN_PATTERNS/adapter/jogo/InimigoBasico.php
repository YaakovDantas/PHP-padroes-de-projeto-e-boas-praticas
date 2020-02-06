<?php

class InimigoBasico implements Inimigo
{
    function andar()
    {
        echo "O inimigo básisco andou";
    }
    
    function atirar(String $string)
    {
        echo "Inimigo atira em $string";
    }
    
    function morrer()
    {
        echo "Inimigo morreu";
    }
}