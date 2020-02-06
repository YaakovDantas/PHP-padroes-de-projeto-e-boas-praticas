<?php

require "Status.php";
require "Pedido.php";
require "Estado.php";
require "Historico.php";
require "Novo.php";
require "Enviado.php";
require "Recebido.php";
require "Finalizado.php";

$nootbook = new Pedido("2020/55", "Nootbook dell");
$historico = new Historico();
echo "<pre>";

$historico->addHistorico($nootbook->salvaEstado());

$nootbook->avanca();

$historico->addHistorico($nootbook->salvaEstado());

$voltarNovo = $historico->getEstado(0);

$nootbook->voltar($voltarNovo);
$historico->addHistorico($nootbook->salvaEstado());

$nootbook->avanca();

$historico->addHistorico($nootbook->salvaEstado());

$nootbook->avanca();

$historico->addHistorico($nootbook->salvaEstado());

$nootbook->avanca();

$historico->addHistorico($nootbook->salvaEstado());

$historico->mostrar();