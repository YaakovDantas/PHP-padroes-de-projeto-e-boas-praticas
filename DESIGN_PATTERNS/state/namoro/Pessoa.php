<?php

class Pessoa
{
    function __construct($nome)
    {
        $this->nome = $nome;
        $this->relacao = new Solteiro();
    }

    public function getNome()
    {
        return $this->nome;
    }
    
    public function getRelacao(){
        return $this->relacao;
    }
    
    public function setRelacao($novaRelacao){
        $this->relacao = $novaRelacao;
    }

    public function solteirar()
    {
        return $this->relacao->comecarSolteiro($this);
    }

    public function namorar()
    {
        return $this->relacao->comecarNamoro($this);
    }
    
    public function noivar()
    {
        return $this->relacao->comecarNoivado($this);
    }
    
    public function casar()
    {
        return $this->relacao->comecarCasamento($this);
    }
}
