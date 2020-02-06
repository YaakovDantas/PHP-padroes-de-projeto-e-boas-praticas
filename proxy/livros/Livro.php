<?php

class Livro
{   
    function __construct($autor, $titulo)
    {
        $this->autor = $autor;
        $this->titulo  = $titulo;
    }

    function getAutor()
    {
        return $this->autor;
    }

    function getTitulo()
    {
        return $this->titulo;
    }
}