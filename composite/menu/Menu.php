<?php

abstract class Menu
{
    function __construct($nome)
    {
        $this->nome = $nome;
    }

    function getNome()
    {
        return $this->nome;
    }

    function render()
    {
        echo "<li> $this->nome </li>";
    }

    function add()
    {
        return false;
    }
}