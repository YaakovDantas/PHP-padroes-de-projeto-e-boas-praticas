<?php

function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");


$cont = 0;

$casas = new Localidades();
$casas2 = new Localidades();
$flyweight = new Flyweight();

while ($cont < 500) {
    $novaCasa = $flyweight->pegar(strval(rand(1,501)), "Rua costa beris");
    $casas->add($novaCasa);
    $cont++;
}

$casas->mostrar();