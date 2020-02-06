<?php

class Lista
{

    private $lista = [];

    public function addItem($item)
    {
        $this->lista[] = $item;
    }

    public function getLista()
    {
        return $this->lista;
    }

}