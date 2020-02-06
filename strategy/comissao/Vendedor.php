<?php 

class Vendedor extends Funcionario
{
    public function calcular(Venda $venda)
    {
        return $venda->getValor() * 0.1;
    } 
}