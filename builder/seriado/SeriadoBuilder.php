<?php

class SeriadoBuilder
{
    private $nome;
    private $duracao;
    private $atores;
    private $genero;
    private $duracaoTotal;
    private $temporadas;

    function __construct()
    {
        $this->duracaoTotal = 0;
        $this->temporadas = [];
    }

    public function comNome($nome)
    {
        $this->nome = $nome;
    }
    
    public function comDuracao($tempo)
    {
        $this->duracao = $tempo;
    }
    public function comAtores($elenco)
    {
        $this->atores = $elenco;
    }
    public function comGenero($genero)
    {
        $this->genero = $genero;
    }

    public function com(Temporada $temporada)
    {
        $this->duracaoTotal += ($temporada->getEpis() * $this->duracao);
        $this->temporadas[] = $temporada;
    }

    public function build()
    {
        return new Seriado(
            $this->nome, 
            $this->duracao, 
            $this->atores, 
            $this->genero, 
            $this->duracaoTotal,
            $this->temporadas
        ) ;
    }
}
