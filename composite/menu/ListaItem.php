<?php

class ListaItem extends Menu
{
    function __construct($nome)
    {
        parent::__construct($nome);
        $this->lista = [];
    }

    function add(Menu $menu)
    {
        $this->lista[] = $menu;
    }

    function render()
    {
        echo "<ul> $this->nome :";
            foreach ($this->lista as $item) {
                $item->render();
            }
        echo "</ul>";
    }
}