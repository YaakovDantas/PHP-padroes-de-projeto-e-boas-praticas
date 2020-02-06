<?php

class Comeco implements Posicao
{
    public function avanca(Pessoa $pessoa)
    {
        $pessoa->setPosicao(new Chamado());
    }
}