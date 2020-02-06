<?php

require "Memento.php";
require "Armazenador.php";
require "Namoro.php";

$namoro = new Namoro("solteiro");
$armazenador = new Armazenador();

$armazenador->addMemento($namoro->salvarRelacao());
$namoro->setRelacao("namorando");
$armazenador->addMemento($namoro->salvarRelacao());

$solteiroMemento = $armazenador->getRelacao(0);
$namoro->voltarRelacao($solteiroMemento);
$armazenador->addMemento($namoro->salvarRelacao());

$namoro->setRelacao("namorando");
$armazenador->addMemento($namoro->salvarRelacao());

$namoro->setRelacao("noivo");
$armazenador->addMemento($namoro->salvarRelacao());

$namoro->setRelacao("casado");
$armazenador->addMemento($namoro->salvarRelacao());

echo "<pre>";
$armazenador->mostrar();