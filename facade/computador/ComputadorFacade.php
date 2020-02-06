<?php

class ComputadorFacade 
{
    function __construct()
    {
        $this->cpu = new CPU();
        $this->memoria = new Memoria();
        $this->hd = new HD();
    }

    public function ligarPC() 
    { 
        $this->cpu->execute();
        $this->memoria->carrega();
    }

    public function salvar($posicao, $string) 
    { 
        $this->memoria->carrega();
        $this->cpu->jump($posicao);
        $this->hd->salva($string);
        $this->memoria->carrega();
    }

}