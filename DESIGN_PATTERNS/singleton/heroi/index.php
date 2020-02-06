<?php

function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");

$protagonista = Principal::getInstance();
$protagonista->setVida(50);

var_dump($protagonista);

$protagonistaNovo = Principal::getInstance(); // continua sendo o mesmo protagonista
$protagonistaNovo->setVida(100);
var_dump($protagonistaNovo);