<?php

class Pedido
{
    function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->status = new Novo();
    }

    function getNome()
    {
        return $this->nome;
    }

    function paga()
    {
        $this->status = new Paga();
    }

    function finaliza()
    {
        $this->status = new Finaliza();
    }
}