<?php

class Filme
{
    function __construct($nome, $data, $status = null)
    {
        $this->nome = $nome;
        $this->data = $data;
        if (is_null($status)) {
            $this->status = 'Em Breve';
        } else {
            $this->status = $status;
        }
    }

    function getNome()
    {
        return $this->nome;
    }

    function getData()
    {
        return $this->data;
    }

    function getStatus()
    {
        return $this->status;
    }

    function setStatus($novoStatus)
    {
        $this->status = $novoStatus;
    }

    function salvar()
    {
        return new Estado(new Filme($this->nome, $this->data, $this->status));
    }

    function voltar(Estado $estado)
    {
        $this->nome = $estado->getPosicao()->getNome();
        $this->data = $estado->getPosicao()->getData();
        $this->status = $estado->getPosicao()->getStatus();
    }
}