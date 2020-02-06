<?php

class Urso implements Animal
{
    function __construct($nome)
    {
        $this->nome = $nome;
        echo "Urso sendo feito <br/>";
    }

    function __clone() 
    {
        echo "Criando copia de urso <br/>";
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function falar()
    {
        echo "$this->nome falou: urrr <br/>";
    }
}