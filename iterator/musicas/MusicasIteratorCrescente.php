<?php 

class MusicasIteratorCrescente implements MusicasIterator
{
    
    public function __construct($musicas) {
        $this->lista = $musicas->getLista();
        $this->posicao = 0;
    }

    public function current()
    {
        return $this->lista[$this->posicao];
    }

    public function next ()
    {
        return $this->lista[$this->posicao++];
    }
    
    public function back ()
    {
        return $this->lista[$this->posicao--];
    }

    public function valid()
    {   
        if ($this->posicao > count($this->lista) - 1) {
            return false;
        } 
        return true;
    }
}