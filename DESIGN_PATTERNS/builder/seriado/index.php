<?php 

require "Seriado.php";
require "Temporada.php";
require "SeriadoBuilder.php";

$builderSerie = new SeriadoBuilder();

$builderSerie->comNome("The Office");
$builderSerie->comDuracao(20);
$builderSerie->comAtores("Steve, Jenna, John, Rain");
$builderSerie->comGenero("Mockumentary");

$builderSerie->com(new Temporada(1, 6));
$builderSerie->com(new Temporada(2, 22));
$builderSerie->com(new Temporada(3, 16));

$seriado = $builderSerie->build();

echo "<pre>";

// var_dump($seriado->getNome());
var_dump($seriado);