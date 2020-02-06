<?php

class Seriado
{
    function __construct($nome, $duracao, $atores, $genero, $duracaoTotal, $temporadas, $alertas)
    {
        $this->nome = $nome;
        $this->duracao = $duracao;
        $this->atores = $atores;
        $this->genero = $genero;
        $this->duracaoTotal = $duracaoTotal;
        $this->temporadas = $temporadas;
        $this->alertaMidiasTemporadas = $alertas;
    }

    public function add(Temporada $temporada)
    {
        $this->alertarNovaTemporada($this, $temporada);
        $this->temporadas[] = $temporada;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getTemporadas()
    {
        return $this->temporadas;
    }

    public function getDuracaoTotal()
    {
        return $this->duracaoTotal;
    }

    private function alertarNovaTemporada($serie, $temporada)
    {
        foreach($this->alertaMidiasTemporadas as $midia) {
            $midia->notificarTemporada($serie, $temporada);
        }
    }
}