<?php 

require "Pizza.php";
require "PizzaBase.php";
require "PizzaQueijo.php";
require "PizzaCarne.php";
require "PizzaItaliana.php";

$pizzaCompleta = new PizzaCarne();
$pizzaCompleta->fazerPizza();

$pizzaCompleta = new PizzaCarne(new PizzaQueijo());
$pizzaCompleta->fazerPizza();

$pizzaCompleta = new PizzaQueijo(new PizzaItaliana());
$pizzaCompleta->fazerPizza();

$pizzaCompleta = new PizzaQueijo(new PizzaItaliana(new PizzaCarne()));
$pizzaCompleta->fazerPizza();