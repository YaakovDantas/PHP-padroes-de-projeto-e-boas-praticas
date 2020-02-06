<?php

class EscolherImpressao
{
    static function imprimir(Maquina $maquina)
    {
        $imprimirFinal = new ImpressoraFinal();
        $imprimirHifen = new ImpressoraHifen($imprimirFinal);
        $impressoraPontoVirgula = new ImpressoraPontoVirgula($imprimirHifen);

        return $impressoraPontoVirgula->imprimir($maquina);
    }
}