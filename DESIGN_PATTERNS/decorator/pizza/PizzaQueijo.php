<?php

class PizzaQueijo extends PizzaBase
{
    function __construct(Pizza $outraPizza = null)
    {
        parent::__construct($outraPizza);
    }

    public function fazerPizza(){
        echo 'Queijo prato adicionado. <br/>';
        echo $this->completarComOutraPizza();
    } 
}