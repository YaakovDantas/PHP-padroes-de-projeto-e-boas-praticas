<?php

class Chamado implements Posicao
{
    public function avanca(Pessoa $pessoa)
    {
        $pessoa->setPosicao(new Atendido());
    }
}