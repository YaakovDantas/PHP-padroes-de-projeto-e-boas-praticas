<?php 

require "SeriadoObserver.php";
require "NovaTemporadaObserver.php";
require "Seriado.php";
require "Temporada.php";
require "SeriadoBuilder.php";
require "Televisao.php";
require "Site.php";
require "Radio.php";

$builderSerie = new SeriadoBuilder();

$builderSerie->comNome("The Office");
$builderSerie->comDuracao(20);
$builderSerie->comAtores("Steve, Jenna, John, Rain");
$builderSerie->comGenero("Mockumentary");

$builderSerie->com(new Temporada(1, 6));
$builderSerie->com(new Temporada(2, 22));
$builderSerie->com(new Temporada(3, 16));

$builderSerie->add(new Radio());
$builderSerie->add(new Televisao());
$builderSerie->add(new Site());

$builderSerie->comAlertas([new Site(), new Televisao()]);

$seriado = $builderSerie->build();

$seriado->add(new Temporada(4, 22));

echo "<pre>";

// var_dump($seriado->getNome());
var_dump($seriado);