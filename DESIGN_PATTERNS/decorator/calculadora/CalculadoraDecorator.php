<?php 

abstract class CalculadoraDecorator implements Calculadora
{
    protected $outraOperacao;
    function __construct(Calculadora $outraOperacao = null){
        $this->outraOperacao = $outraOperacao;
    }

    public function operacao($num1, $num2)
    {
        $primeiro = $this->realizarCalculo($num1, $num2);
        $segundo = $this->realizarCalculoProximo($num1, $num2);
        return $primeiro + $segundo;
    }

    public abstract function realizarCalculo($num1, $num2);

    public function realizarCalculoProximo($num1, $num2)
    {
        if(is_null($this->outraOperacao)) return 0;
        return $this->outraOperacao->operacao($num1, $num2);
    }
}