<?php
class ICMS extends ImpostoCondicional {

    public function taxarMaximo($orcamento)
    { 
        return $orcamento->getValor() > 440;
    }

    public function calcularMaximo($orcamento)
    {
        return $orcamento->getValor() * 0.1;
    }

    public function calcularMinimo($orcamento)
    {
        return $orcamento->getValor() * 0.05;
    }
}