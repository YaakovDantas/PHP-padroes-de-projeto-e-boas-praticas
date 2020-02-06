<?php

require "EstadosProcesso.php";
require "Processo.php";
require "Criado.php";
require "Aprovado.php";
require "Concluido.php";
require "Reprovado.php";

$processo1 = new Processo("0012/2020");
$processo2 = new Processo("1902/2020");

echo $processo1->getEstado().'<br/>';
$processo1->reprovar();
echo $processo1->getEstado().'<br/>';
echo "<br/>";
echo $processo2->getEstado().'<br/>';
$processo2->aprovar();
echo $processo2->getEstado().'<br/>';
$processo2->concluir();
echo $processo2->getEstado().'<br/>';
