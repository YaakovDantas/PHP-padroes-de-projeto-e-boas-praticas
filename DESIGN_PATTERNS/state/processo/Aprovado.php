<?php

class Aprovado implements EstadosProcesso
{
    public function informar(Processo $processo)
    {
        return "O processo: $processo está aprovado";
    }

    public function criar(Processo $processo)
    {
        throw new Exception("Este processo já foi criado");
    }

    public function aprovar(Processo $processo)
    {
        throw new Exception("Este processo já foi aprovado");
    }

    public function concluir(Processo $processo)
    {
        $processo->setEstado(new Concluido());
    }

    public function reprovar(Processo $processo)
    {
        $processo->setEstado(new Reprovado());
    }

}