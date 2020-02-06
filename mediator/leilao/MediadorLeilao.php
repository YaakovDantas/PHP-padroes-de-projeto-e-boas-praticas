<?php

class MediadorLeilao implements Mediator
{
    function __construct()
    {
        $this->itens = [];
        $this->valores = [];
        $this->colegas = [];
    }

    function proposta(Colega $colega, $valor, Item $item)
    {
        $this->itens[] = $item;
        $this->valores[$item->getNome()][] = $valor;
        $this->colegas[$valor] = $colega;
    }

    function darResultados(Item $item)
    {
        $valor = max($this->valores[$item->getNome()]);
        $colega = $this->colegas[$valor];
        
        if ($colega !== null) {
            echo "{$item->getNome()} vendido para {$colega->getNome()} por: $valor <br/>";
        } else {
            echo "Nenhuma oferta para este item: {$item->getNome()} <br/>";
        }
        

    }

}