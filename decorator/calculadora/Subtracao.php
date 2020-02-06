<?php 

class Subtracao extends CalculadoraDecorator
{
    function __construct(Calculadora $outraOperacao = null)
    {
        parent::__construct($outraOperacao);
    }
    public function realizarCalculo($num1, $num2)
    {
        return $num1 - $num2;
    }
}