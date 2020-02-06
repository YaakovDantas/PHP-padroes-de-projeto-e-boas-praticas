<?php 

interface EstadosProcesso
{
    public function informar(Processo $processo);
    public function criar(Processo $processo);
    public function aprovar(Processo $processo);
    public function concluir(Processo $processo);
    public function reprovar(Processo $processo);
}