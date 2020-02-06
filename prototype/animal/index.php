<?php

function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");

$dolly = new Ovelha('Dolly');
$broggy = new Urso('Broggy');

$fabrica = new CloneFactory();

$dorry = $fabrica->pegarClone($dolly);
$brolly = $fabrica->pegarClone($broggy);


$dorry->setNome("Dorry");
$dorry->falar();


$dolly->falar();
$broggy->falar();

$brolly->setNome("Brolly");
$brolly->falar();