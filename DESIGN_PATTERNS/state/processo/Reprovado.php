<?php

class Reprovado implements EstadosProcesso
{
    public function informar(Processo $processo)
    {
        return "O processo: $processo está reprovado.";
    }

    public function criar(Processo $processo)
    {
        throw new Exception("Não é possivel criar um projeto reprovado.");
    }

    public function aprovar(Processo $processo)
    {
        throw new Exception("Não é possivel aprovar um projeto reprovado.");
    }

    public function concluir(Processo $processo)
    {
        throw new Exception("Não é possivel concluir um projeto reprovado.");
    }

    public function reprovar(Processo $processo)
    {
        throw new Exception("Processo já foi reprovado.");
    }

}