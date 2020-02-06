<?php

class SeriadoBuilder
{
    private $nome;
    private $duracao;
    private $atores;
    private $genero;
    private $duracaoTotal;
    private $temporadas;
    private $midias;
    private $alertas;

    function __construct()
    {
        $this->duracaoTotal = 0;
        $this->temporadas = [];
        $this->midias = [];
    }

    public function add(SeriadoObserver $midia)
    {
        $this->midias[] = $midia;
    }

    public function comAlertas(Array $alertas)
    {
        $this->alertas = $alertas;
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
        $seriado = new Seriado(
            $this->nome, 
            $this->duracao, 
            $this->atores, 
            $this->genero, 
            $this->duracaoTotal,
            $this->temporadas,
            $this->alertas
        );

        $this->notificarMidias($seriado);
        return $seriado ;
    }

    private function notificarMidias($seriado)
    {
        foreach($this->midias as $midia) {
            $midia->notificar($seriado);
        }
    }
}
