<?php

require "Estado.php";
require "Armazenador.php";
require "Filme.php";

$vingadores = new Filme("Vingadores: Guerra Infinita", "09/12/2018");
$historicoVingadores = new Armazenador();

// $vingadores2 = new Filme("Vingadores: Ultimato", "09/12/2019");
// $historicoVingadores2 = new Armazenador();

$historicoVingadores->addEstado($vingadores->salvar());

$vingadores->setStatus("Lançamento");
$historicoVingadores->addEstado($vingadores->salvar());

// $historicoVingadores2->addEstado($vingadores2->salvar());

// $vingadores2->setStatus("Lançamento");
// $historicoVingadores2->addEstado($vingadores2->salvar());

$voltarEmBreve = $historicoVingadores->getEstado(0);
$vingadores->voltar($voltarEmBreve);
$historicoVingadores->addEstado($vingadores->salvar());

$vingadores->setStatus("Estreia");
$historicoVingadores->addEstado($vingadores->salvar());

$vingadores->setStatus("Ultima Semana");
$historicoVingadores->addEstado($vingadores->salvar());

$vingadores->setStatus("Fora de cartas");
$historicoVingadores->addEstado($vingadores->salvar());

$voltarUltimaSemana = $historicoVingadores->getEstado(4);
$vingadores->voltar($voltarUltimaSemana);
$historicoVingadores->addEstado($vingadores->salvar());

$vingadores->setStatus("Fora de cartas");
$historicoVingadores->addEstado($vingadores->salvar());

echo "<pre>";
$historicoVingadores->mostrar();
// $historicoVingadores2->mostrar();