<?php

class Moeda
{
    private $lados = ['cara', 'coroa'];
    private $ladoEscolhido;

    public function __construct()
    {
        
        shuffle($this->lados);
        $this->ladoEscolhido = $this->lados[0];
    }

    public function getLado()
    {
        return $this->ladoEscolhido;
    }
}