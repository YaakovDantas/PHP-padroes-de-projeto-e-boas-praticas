<?php

class Armazenador
{
    function __construct()
    {
        $this->mementos = [];
    }

    function addMemento(Memento $memento)
    {
        $this->mementos[] = $memento;
    }

    function getRelacao($index)
    {
        return $this->mementos[$index];
    }

    function mostrar()
    {
        foreach($this->mementos as $m) {
            var_dump($m);
        }
    }
}