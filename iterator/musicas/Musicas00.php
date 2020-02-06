<?php

class Musicas00
{
    function __construct()
    {
        $this->lista = [];
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