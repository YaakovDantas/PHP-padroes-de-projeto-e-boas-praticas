<?php

class Prateleira
{
       
    function __construct() 
    {
        $this->livros = [];
    }

    function add(Livro $livro)
    {
        return $this->livros[] = $livro;
    }

    function mostrarLivros()
    {
        foreach ($this->livros as $livro) {
            echo "title: ".$livro->getAutor()."  author: ".$livro->getTitulo()."<br/>";
        };
    }
}