<?php

class PizzaCarne extends PizzaBase
{
    function __construct(Pizza $outraPizza = null)
    {
        parent::__construct($outraPizza);
    }

    public function addQueijo()
    {
        return 'Provolone foi adicionado. <br/>';
    }
    
    public function addRecheio()
    {
        return 'Picanha adicionada. <br/>';
    }   
}