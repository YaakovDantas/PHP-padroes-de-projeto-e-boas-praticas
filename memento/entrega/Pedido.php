<?php

class Pedido
{
    function __construct($numero, $nomeProduto, $status = null)
    {
        $this->numero = $numero;
        $this->nomeProduto = $nomeProduto;
        if (is_null($status)){
            $this->status = new Novo();
        } else {
            $this->status = $status;
        }
    }

    function getNumero()
    {
        return $this->numero;
    }

    function getNomeProduto()
    {
        return $this->nomeProduto;
    }
    
    function getStatus()
    {
        return $this->status;
    }

    function setStatus(Status $novoStatus)
    {
        $this->status = $novoStatus;
    }

    function avanca()
    {
        $this->status->avanca($this);
    }

    function salvaEstado()
    {
        return new Estado(new Pedido($this->numero, $this->nomeProduto, $this->status));
    }

    function voltar(Estado $estado)
    {
        $this->numero = $estado->getPosicao()->getNumero();
        $this->nomeProduto = $estado->getPosicao()->getNomeProduto();
        $this->status = $estado->getPosicao()->getStatus();
    }
}