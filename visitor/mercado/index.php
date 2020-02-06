<?php

function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");

$ceral = new Cereal(50);
$carne = new Carne(50);
$leite = new Liquido(50);

$impostoNormal = new ImpostoNormal();

$ceral->aceita($impostoNormal);
$carne->aceita($impostoNormal);
$leite->aceita($impostoNormal);

$impostoCrise = new ImpostoCrise();

$ceral->aceita($impostoCrise);
$carne->aceita($impostoCrise);
$leite->aceita($impostoCrise);