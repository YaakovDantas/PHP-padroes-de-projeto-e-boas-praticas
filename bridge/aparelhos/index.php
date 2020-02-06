<?php

function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");

$tv = new Tv("Philips");
$dvd = new Dvd("Assus");

$controleTv = new ControleTv($tv);
$controleDvd = new ControleDvd($dvd);

// echo $controleTv->ligar();
// echo $controleTv->botaoInput();
echo $controleTv->x();

echo "<br/>";

echo $controleDvd->x();


// echo $controleDvd->ligar();
// echo $controleDvd->botaoInput();
