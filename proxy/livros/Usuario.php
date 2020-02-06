<?php

class Usuario
{
    function __construct($senha)
    {
        $this->senha = $senha;
    }

    function getSenha()
    {
        return $this->senha;
    }
}