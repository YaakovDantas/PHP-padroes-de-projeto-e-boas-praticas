<?php

class Livro
{
    private $author;
    private $title;    
    
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