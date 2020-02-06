<?php

class Musicas90
{
    function __construct()
    {
        $this->lista = [];
        $this->posicao = 0;
    }

    function add(MusicaInfo $info)
    {
        $this->lista[] = $info;
    }

    function getLista()
    {
        return $this->lista;
    }
}