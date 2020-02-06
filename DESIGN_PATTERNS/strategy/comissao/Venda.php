<?php 

class Venda
{
    public function __construct($valor)
    {
        $this->valor = $valor;
    }

    public function getValor()
    {
        return $this->valor;
    }
}