<?php

class Ovelha implements Animal
{
    function __construct($nome)
    {
        $this->nome = $nome;
        echo "Ovelha sendo feita <br/>";
    }

    function __clone() 
    {
        echo "Criando copia de ovelha <br/>";
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function falar()
    {
        echo "$this->nome falou: bee <br/>";
    }
}