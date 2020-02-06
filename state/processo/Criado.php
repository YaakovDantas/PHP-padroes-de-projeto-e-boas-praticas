<?php

class Criado implements EstadosProcesso
{
    public function informar(Processo $processo)
    {
        return "O processo: $processo está criado";
    }

    public function criar(Processo $processo)
    {
        throw new Exception("Este processo já está criado");
    }

    public function aprovar(Processo $processo)
    {
        $processo->setEstado(new Aprovado());
    }

    public function concluir(Processo $processo)
    {
        throw new Exception("Este processo deve ser aprovado antes de concluir");
    }

    public function reprovar(Processo $processo)
    {
        $processo->setEstado(new Reprovado());
    }

}