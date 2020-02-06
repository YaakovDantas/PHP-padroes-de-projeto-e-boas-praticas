<?php

class PizzaQueijo extends PizzaBase
{
    function __construct(Pizza $outraPizza = null)
    {
        parent::__construct($outraPizza);
    }

    public function addQueijo()
    {
        return 'Queijo prato adicionado. <br/>';
    }
    
    public function addRecheio()
    {
        return 'Recheio fino adicionado. <br/>';
    }   
}