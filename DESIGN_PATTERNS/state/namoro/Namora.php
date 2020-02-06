<?php

class Namora implements EstadosDoNamoro
{
    public function comecarSolteiro(Pessoa $pessoa)
    {
        $pessoa->setRelacao(new Solteiro());
        return "Voltar a vida de solteiro";
    }

    public function comecarNamoro(Pessoa $pessoa)
    {
        return 'Já estou namorando, obrigado.';
    }
    
    public function comecarNoivado(Pessoa $pessoa)
    {
        $pessoa->setRelacao(new Noivo());
        return 'Quer casar comigo?';
    }
    
    public function comecarCasamento(Pessoa $pessoa)
    {
        return 'Vamos noivar antes né.';
    }
}