<?php

class Jogador
{
    private $nome;
    private $lados = ['cara', 'coroa'];
    private $ladoApostado;

    public function __construct($nome)
    {
        $this->nome = $nome;
        shuffle($this->lados);
        $this->ladoApostado = $this->lados[0];
    }

    public function getLadoApostado()
    {
        return $this->ladoApostado;
    }

    public function setLadoOposto($string)
    {
        $this->ladoApostado = $string === 'cara' ? 'coroa' : 'cara';
    }

    public function vencedor($lado)
    {
        if ($lado == $this->ladoApostado) {
            echo "$this->nome venceu, apostando: $lado </br>";
        } else {
            echo "$this->nome perdeu, resultado foi: $lado </br>";
        }
    }
}
