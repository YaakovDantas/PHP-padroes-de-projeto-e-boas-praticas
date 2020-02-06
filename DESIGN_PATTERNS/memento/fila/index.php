<?php

require "Posicao.php";
require "Pessoa.php";
require "Estado.php";
require "Historico.php";
require "Comeco.php";
require "Chamado.php";
require "Atendido.php";
require "Finalizado.php";

$pessoa = new Pessoa("Luffy");
$historico = new Historico();
echo "<pre>";

$historico->addHistorico($pessoa->salvaEstado()); # Comeco
$pessoa->avanca();

$historico->addHistorico($pessoa->salvaEstado()); # Chamado
$pessoa->avanca();

$historico->addHistorico($pessoa->salvaEstado()); # Atendido
$pessoa->avanca();

$historico->addHistorico($pessoa->salvaEstado()); # Finalizado

$chamado = $historico->getHistorico(1);
$pessoa->restaura($chamado);  # voltando para o estado de Chamado
$historico->addHistorico($pessoa->salvaEstado()); # Chamado

$pessoa->avanca();
$historico->addHistorico($pessoa->salvaEstado()); # Atendido

$historico->mostrar();