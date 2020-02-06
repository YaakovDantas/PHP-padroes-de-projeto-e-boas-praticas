<?php
abstract class ImpostoDecorator implements Imposto {

    protected $outroImposto;

    function __construct(Imposto $imposto = null)
    {
        $this->outroImposto =  $imposto;
    }

    public abstract function calcula(Orcamento $orcamento);

    public function calculaOutroImposto($orcamento){
        if (is_null($this->outroImposto)) return 0;
        return $this->outroImposto->calcula($orcamento);
    }
}

