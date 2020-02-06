<?php

class Chain
{
    public function acharDesconto($lista){
        
        $desconto240Reais = new Desconto240Reais();
        
        $descontoPapelEBolsa = new DescontoPapelEBolsa($desconto240Reais);

        $desconto4Itens = new Desconto4Itens($descontoPapelEBolsa);

        return $desconto4Itens->desconto($lista);
    }
}
