<?php

class Solteiro implements EstadosDoNamoro
{
    public function comecarSolteiro(Pessoa $pessoa)
    {
        return 'Vamo farrar né.';
    }

    public function comecarNamoro(Pessoa $pessoa)
    {
        $pessoa->setRelacao(new Namora());
        return "Achei namorada rapidin";
    }
    
    public function comecarNoivado(Pessoa $pessoa)
    {
        return 'Melhor encontrar uma namorada antes de ficar noivo.';
    }
    
    public function comecarCasamento(Pessoa $pessoa)
    {
        return 'Pff né.';
    }
}