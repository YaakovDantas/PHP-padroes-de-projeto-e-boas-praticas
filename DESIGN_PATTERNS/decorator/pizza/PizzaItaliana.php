<?php
class PizzaItaliana extends PizzaBase
{
    function __construct(Pizza $outraPizza = null) {
        parent::__construct($outraPizza);
    }

    public function fazerPizza(){
        echo 'Pizza de Italiana criada. <br/>';
        echo $this->completarComOutraPizza();
    }
}