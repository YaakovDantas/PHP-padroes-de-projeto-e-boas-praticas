<?php

class Atendido implements Posicao
{
    public function avanca(Pessoa $pessoa)
    {
        $pessoa->setPosicao(new Finalizado());
    }
}