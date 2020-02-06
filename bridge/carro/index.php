<?php

function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");

$corolla = new Corolla();
$civic = new Civic();

$corollaMotor8 = new V8($corolla);
$corollaMotor40 = new Cavalos40($corolla);
$civicMotor8 = new V8($civic);
$civicMotor40 = new Cavalos40($civic);

$corollaMotor8->darPartida();
echo "<br>";
$corollaMotor40->darPartida();
echo "<br>";

$civicMotor8->darPartida();
echo "<br>";
$civicMotor40->darPartida();
echo "<br>";