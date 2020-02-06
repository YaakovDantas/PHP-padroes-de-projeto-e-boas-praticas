<?php
class ISS extends ImpostoCondicional {

    public function taxarMaximo($orcamento)
    {
        return $orcamento->getValor() > 540;
    }

    public function calcularMaximo($orcamento)
    {
        return $orcamento->getValor() * 0.15;
    }

    public function calcularMinimo($orcamento)
    {
        return $orcamento->getValor() * 0.03;
    }
}