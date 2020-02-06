<?php

class Casado implements EstadosDoNamoro
{
    public function comecarSolteiro(Pessoa $pessoa)
    {
        $pessoa->setRelacao(new Solteiro());
        return 'Depois de casado ficar solteiro é foda.';
    }

    public function comecarNamoro(Pessoa $pessoa)
    {
        return 'Já estou muito bem casado, obrigado.';
    }
    
    public function comecarNoivado(Pessoa $pessoa)
    {
        return 'Já estou casado.';
    }
    
    public function comecarCasamento(Pessoa $pessoa)
    {
        return 'Já casei uma vez, já deu';
    }
}