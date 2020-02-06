<?php 

class ImpressoraHifen extends Impressora
{
    function __construct($proximo)
    {
        $this->proximo = $proximo;
        $this->tipo = '-';
    }

    public function imprimir(Maquina $maquina)
    {
        if ($this->tipo === $maquina->getModelo()) {
            return $this->imprimirTexto($maquina->getTexto());
        } else if (!is_null($this->proximo)) {
            return $this->proximo->imprimir($maquina);
        }
        return "Nada para imprimir";
    }

    protected function imprimirTexto($texto)
    {
        return str_replace(" ", $this->tipo, $texto);
    }

}