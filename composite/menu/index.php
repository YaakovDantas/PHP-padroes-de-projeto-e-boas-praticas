<?php

function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");


$item1 = new Item("Login");
$item2 = new Item("Sair");
$item3 = new Item("Info");

$item4 = new Item("Usuario");
$item5 = new Item("Estoque");
$item6 = new Item("Contas");

$lista1 = new ListaItem("CADASTROS");
$lista1->add($item4);
$lista1->add($item5);
$lista1->add($item6);


$lista2 = new ListaItem("CEOS");
$item10 = new Item("Don Flamingo");
$item11 = new Item("Rosinante");
$lista2->add($item10);
$lista2->add($item11);


$item7 = new Item("Cardio");
$item8 = new Item("Rino");
$item9 = new Item("Mamo");

$lista3 = new ListaItem("CLINICAS");
$lista3->add($item7);
$lista3->add($item8);
$lista3->add($item9);
$lista3->add($lista2);



echo "Menu:<br/>";

echo "<ul>";

$item1->render();
$item2->render();
$item3->render();

$lista1->render();

$lista3->render();








echo "</ul>";