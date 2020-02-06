<?php

class Concluido implements EstadosProcesso
{
    public function informar(Processo $processo)
    {
        return "O processo: $processo está finalizado.";
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
        throw new Exception("Este processo já foi concluido");
    }

    public function reprovar(Processo $processo)
    {
        throw new Exception("Não é possivel reprovar um processo que já foi concluido");
    }

}