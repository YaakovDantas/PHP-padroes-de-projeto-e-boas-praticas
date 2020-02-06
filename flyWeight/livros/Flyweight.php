<?php

class Flyweight {

    private $livros = array();     
    function __construct() {
        $this->livros[1] = NULL;
        $this->livros[2] = NULL;
        $this->livros[3] = NULL;
    }  
    function pegarLivro($index) {
        if (NULL == $this->livros[$index]) {
            $fazerLivro = 'fazerLivro'.$index;
            $this->livros[$index] = $this->$fazerLivro(); 
        } 
        return $this->livros[$index];
    }    

    function fazerLivro1() {
        $livro = new Livro('Merry Truett','PHP for anyone'); 
        return $livro;
    }
    function fazerLivro2() {
        $livro = new Livro('Jerry Truett','SQL for you'); 
        return $livro;
    }
    function fazerLivro3() {
        $livro = new Livro('Perry Truett','JS for tu'); 
        return $livro;
    }
}