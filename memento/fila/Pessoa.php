<?php

class Pessoa
{
    function __construct($nome, $posicao = null)
    {
        $this->nome = $nome;
        if (is_null($posicao)){
            $this->posicao = new Comeco();
        } else {
            $this->posicao = $posicao;
        }
    }

    function getNome()
    {
        return $this->nome;
    }

    function getPosicao()
    {
        return $this->posicao;
    }

    function setPosicao(Posicao $posicaoNova)
    {
        $this->posicao = $posicaoNova;
    }

    function avanca(){
        $this->posicao->avanca($this);
    }

    public function salvaEstado() 
    {
        return new Estado(new Pessoa($this->nome, $this->posicao));
    }

    public function restaura($estado) 
    {
        $this->data = $estado->getPosicao()->getNome();
        $this->posicao = $estado->getPosicao()->getPosicao();
    }
}