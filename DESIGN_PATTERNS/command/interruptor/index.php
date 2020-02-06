<?php

function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");

$luz1 = new Luz("luz1");
$luz2 = new Luz("luz2");
$luz3 = new Luz("luz3");

$motor = new Motor("V8");
$commandMotor = new LigaCommand($motor);
$commandMotor->execute();


$commandLuz1 = new LigaCommand($luz1);
$commandLuz1->execute();

$commandLuz3 = new DesligaCommand($luz3);
$commandLuz3->execute();


$commandLuz2 = new LigaCommand($luz2);
$commandLuz2->execute();
$commandLuz2 = new DesligaCommand($luz2);
$commandLuz2->execute();

$commandMotor = new DesligaCommand($motor);
$commandMotor->execute();