<?php
class CalculadoraDeImpostos {

    public function calcula(Orcamento $orcamento, Imposto $estrategiaDeImposto) {
        $resultado = $estrategiaDeImposto->calcula($orcamento);
        return $resultado;
    }
}