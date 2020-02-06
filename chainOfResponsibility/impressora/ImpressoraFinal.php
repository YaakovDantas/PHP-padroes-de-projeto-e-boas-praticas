<?php 

class ImpressoraFinal extends Impressora
{
    public function imprimir(Maquina $maquina)
    {
        return $this->imprimirTexto($maquina->getTexto());
    }
}