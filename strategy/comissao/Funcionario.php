<?php 

abstract class Funcionario
{
    
    public function calcular(Venda $venda)
    {
        $valorSorteado = $this->comissaoAleatoria($venda->getValor());
        return $valorSorteado;
    }

    protected function comissaoAleatoria($valor)
    {
        $this->random = mt_rand(1,100);
        if($this->random >= 1 && $this->random <= 20) return $valor * 0.05;
        else if ($this->random > 20 && $this->random <= 50) return $valor * 0.03;
        else return $valor * 0.006;
    }
}