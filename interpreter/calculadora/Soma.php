<?php

class Soma implements Expressao
{
    function __construct($esquerda, $direita)
    {
        $this->esquerda = $esquerda;
        $this->direita = $direita;
    }

    function avalia()
    {
        $valorEsquerda = $this->esquerda->avalia();
        $valorDireita = $this->direita->avalia();
        return $valorEsquerda + $valorDireita;
    }
}