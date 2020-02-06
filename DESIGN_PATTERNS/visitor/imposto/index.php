<?php

function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");

$impostoPB = new ImpostoPB(50);
$impostoRN = new ImpostoRN(50);

$calcularPB = new CalcularPB();
$calcularRN = new CalcularRN();

$impostoPB->aceita($calcularPB);
$impostoRN->aceita($calcularRN);