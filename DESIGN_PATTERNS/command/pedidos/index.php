<?php

function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");

$pedido1 = new Pedido("Luffy", 150);
$pedido2 = new Pedido("Zoro", 250);
$pedido3 = new Pedido("Nami", 350);
$pedido4 = new Pedido("Usoop", 450);
$pedido5 = new Pedido("Sanji", 550);

$lista = new ListaProcessamento();

$lista->add(new PagaCommand($pedido1));
$lista->add(new PagaCommand($pedido2));
$lista->add(new FinalizaCommand($pedido4));
$lista->add(new PagaCommand($pedido3));
$lista->add(new PagaCommand($pedido5));
$lista->add(new FinalizaCommand($pedido1));
$lista->add(new FinalizaCommand($pedido2));

$lista->processar();