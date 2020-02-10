<?php

class Curso
{
    function __construct($descricao)
    {
        $this->descricao = $descricao;
    }

    function getDescricao()
    {
        return $this->descricao;
    }
}