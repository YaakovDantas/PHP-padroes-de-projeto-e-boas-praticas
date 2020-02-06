<?php

class MusicaInfo
{
    function __construct($banda, $ano)
    {
        $this->banda = $banda;
        $this->ano = $ano;
    }

    function getBanda()
    {
        return  $this->banda;    
    }

    function getAno()
    {
        return  $this->ano;
    }

    function info()
    {
        echo "$this->banda, ano $this->ano <br/>";
    }
}