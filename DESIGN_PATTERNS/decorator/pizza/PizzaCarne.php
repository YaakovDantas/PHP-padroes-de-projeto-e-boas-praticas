<?php

class PizzaCarne extends PizzaBase
{
    function __construct(Pizza $outraPizza = null)
    {
        parent::__construct($outraPizza);
    }

    public function fazerPizza(){
        echo 'Pizza de carne criada. <br/>';
        echo $this->completarComOutraPizza();
    }
}