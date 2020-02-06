<?php

class Processo
{
    function __construct($numero)
    {
        $this->numero = $numero;
        $this->estado = new Criado();
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getEstado()
    {
        return $this->estado->informar($this);
    }

    public function setEstado(EstadosProcesso $novoEstado)
    {
        $this->estado = $novoEstado;
    }

    public function criar()
    {
        $this->estado->criar($this);
    }

    public function aprovar()
    {
        $this->estado->aprovar($this);
    }

    public function concluir()
    {
        $this->estado->concluir($this);
    }

    public function reprovar()
    {
        $this->estado->reprovar($this);
    }

    public function __toString(){
        return $this->numero;
    }
}