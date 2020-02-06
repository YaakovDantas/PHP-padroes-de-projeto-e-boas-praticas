<?php

abstract class PizzaBase implements Pizza
{
    protected $outraPizza;
    function __construct(Pizza $outraPizza = null)
    {
        $this->outraPizza = $outraPizza;
    }

    public function fazerPizza(){
        echo $this->addRecheio();
        echo $this->addQueijo();
        echo $this->completarComOutraPizza();
    }

    public abstract function addQueijo();
    
    public abstract function addRecheio();

    public function completarComOutraPizza()
    {
        
        if (is_null($this->outraPizza)) {
            return '<br/>';
        }
        return $this->outraPizza->fazerPizza();
        
    }    
}