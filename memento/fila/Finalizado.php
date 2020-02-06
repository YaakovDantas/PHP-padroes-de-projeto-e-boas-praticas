<?php

class Finalizado implements Posicao
{
    public function avanca(Pessoa $pessoa)
    {
       throw new Exception("Esta pessoa não já foi atendida");
    }
}