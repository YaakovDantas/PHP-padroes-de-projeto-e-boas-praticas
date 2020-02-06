<?php

function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");

$torre = new TorreComando();

$piloto1 = new Piloto("Amilton", "15:55", $torre);
$piloto2 = new Piloto("Sporh", "12:55", $torre);
$piloto3 = new Piloto("Anderson", "14:55", $torre);
$piloto4 = new Piloto("Santos D.", "11:55", $torre);

$torre->addHora($piloto1->getHora());
$torre->addHora($piloto2->getHora());
$torre->addHora($piloto3->getHora());
$torre->addHora($piloto4->getHora());


$piloto1->subir("12:55");
$piloto1->subir("12:25");

$piloto4->subir("14:55");
$piloto2->descer("11:25");

$piloto1->descer("14:55");
$piloto3->subir("12:35");

$piloto2->descer("17:55");
$piloto4->descer("12:25");
