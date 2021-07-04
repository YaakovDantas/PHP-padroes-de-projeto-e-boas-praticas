<?php

abstract class PizzaBase implements Pizza
{
    protected $outraPizza;
    function __construct(Pizza $outraPizza = null)
    {
        $this->outraPizza = $outraPizza;
    }

    public function fazerPizza() 
    {
        echo $this->completarComOutraPizza();
    }
    
    public function completarComOutraPizza()
    {
        
        if (is_null($this->outraPizza)) {
            return '<br/>';
        }
        return $this->outraPizza->fazerPizza();
        
    }    
}