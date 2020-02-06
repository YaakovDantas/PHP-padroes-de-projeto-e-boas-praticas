<?php

class MusicasIteratorDecrescente implements MusicasIterator
{
    public function __construct($musicas) {
        $this->lista = $musicas->getLista();
        $this->posicao =  count($this->lista);
    }

    public function current()
    {
        return $this->lista[$this->posicao];
    }
    public function next ()
    {
        return $this->lista[--$this->posicao];
    }
    public function back ()
    {
        return $this->lista[++$this->posicao];
    }
    public function valid()
    {   
        if ($this->posicao > 0) {
            return true;
        } 
        return false;
    }
}