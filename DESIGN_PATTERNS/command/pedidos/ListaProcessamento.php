<?php

class ListaProcessamento
{
    function __construct()
    {
        $this->lista = [];
    }

    function add(Command $comando)
    {
        $this->lista[] = $comando;
    }

    function processar()
    {
        foreach ($this->lista as $comando) {
            $comando->execute();
        }
    }
}