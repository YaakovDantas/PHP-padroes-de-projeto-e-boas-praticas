<?php

function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");

$inimigo = new InimigoBasico();
$carro = new InimigoCarro();
$carroAdpter = new CarroAdapter($carro);

$inimigo->andar();
echo "<br />";
$inimigo->atirar("Mark");
echo "<br />";
$inimigo->morrer();
echo "<br />";
$carroAdpter->andar();
echo "<br />";
$carroAdpter->atirar("Jhon");
echo "<br />";
$carroAdpter->morrer();
echo "<br />";