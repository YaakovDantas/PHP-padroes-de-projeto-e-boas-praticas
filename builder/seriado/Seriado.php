<?php

class Seriado
{
    function __construct($nome, $duracao, $atores, $genero, $duracaoTotal, $temporadas)
    {
        $this->nome = $nome;
        $this->duracao = $duracao;
        $this->atores = $atores;
        $this->genero = $genero;
        $this->duracaoTotal = $duracaoTotal;
        $this->temporadas = $temporadas;
    }

    public function getNome()
    {
        return $this->nome;
    }
}