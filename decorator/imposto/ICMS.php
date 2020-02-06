<?php
class ICMS extends ImpostoDecorator {

    function __construct(Imposto $outroImposto = null)
    {
        parent::__construct($outroImposto);
    }

    public function calcula(Orcamento $orcamento) {
        return $orcamento->getValor() * 0.05 + $this->calculaOutroImposto($orcamento);
    }

}