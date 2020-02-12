<?php

class Jogo
{
    private $jogadores = [];
    private $moeda;

    public function __construct($jogador1, $jogador2)
    {
        $this->jogadores[0] = new Jogador($jogador1);
        $this->jogadores[1] = new Jogador($jogador2);
        $this->moeda = new Moeda();
    }

    public function jogarMoeda()
    {
        shuffle($this->jogadores);
        $jogadorEscolhido = $this->jogadores[0];
        $escolhaJogadorEscolhido = $jogadorEscolhido->getLadoApostado();
        
        $jogadorOposto = $this->jogadores[1];
        $jogadorOposto->setLadoOposto($escolhaJogadorEscolhido);

        $ladoResultado = $this->moeda->getLado();

        $jogadorEscolhido->vencedor($ladoResultado);
        $jogadorOposto->vencedor($ladoResultado);
    }
}