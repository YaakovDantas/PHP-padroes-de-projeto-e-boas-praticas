<?php 

abstract class ImpostoCondicional implements Imposto
{
    public function calcula (Orcamento $orcamento)
    {
        if ($this->taxarMaximo($orcamento)) {
            return $this->calcularMaximo($orcamento);
        } else {
            return $this->calcularMinimo($orcamento);
        }
    }

    public abstract function taxarMaximo($orcamento);

    public abstract function calcularMaximo($orcamento);

    public abstract function calcularMinimo($orcamento);

}