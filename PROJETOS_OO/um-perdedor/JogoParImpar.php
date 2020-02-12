<?php

class JogoParImpar
{
    private $jogador1;
    private $jogador2;

    function __construct($jogador1, $jogador2)
    {   
        $this->jogador1 = $jogador1;
        $this->jogador2 = $jogador2;
    }

    public function pegarVencedor()
    {
        $numero = $this->jogador1->getNumero() + $this->jogador2->getNumero();

        $this->jogador1->compararNumero($numero);
        $this->jogador2->compararNumero($numero);
    }
}