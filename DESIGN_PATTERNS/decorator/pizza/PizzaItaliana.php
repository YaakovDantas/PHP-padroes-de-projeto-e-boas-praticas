<?php
class PizzaItaliana extends PizzaBase
{
    function __construct(Pizza $outraPizza = null) {
        parent::__construct($outraPizza);
    }

    public function addQueijo()
    {
        return "Colocando cheddar. <br />";
    }

    public function addRecheio()
    {
        return "Colocando manjericão. <br />";
    }
}