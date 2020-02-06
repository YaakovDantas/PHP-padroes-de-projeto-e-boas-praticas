<?php

class Noivo implements EstadosDoNamoro
{
    public function comecarSolteiro(Pessoa $pessoa)
    {
        $pessoa->setRelacao(new Solteiro());
        return "2 anos perdidos da minha vida.";
    }

    public function comecarNamoro(Pessoa $pessoa)
    {
        return 'Já estou noivo, obrigado.';
    }
    
    public function comecarNoivado(Pessoa $pessoa)
    {
        return 'Tem como ficar mais noivo que isso não homi!.';
    }
    
    public function comecarCasamento(Pessoa $pessoa)
    {
        $pessoa->setRelacao(new Casado());
        return "Vamos marcar a data?!?";
    }
}