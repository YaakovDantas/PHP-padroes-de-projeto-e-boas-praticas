<?php

require 'Impressora.php';
require 'Maquina.php';
require 'ImpressoraFinal.php';
require 'ImpressoraPontoVirgula.php';
require 'ImpressoraHifen.php';
require 'EscolherImpressao.php';

// $maquina = new Maquina("Estou testando aqui mesmo o que vai ser impresso", ";");
$maquina = new Maquina("Estou testando aqui mesmo o que vai ser impresso", "-");
// $maquina = new Maquina("Estou testando aqui mesmo o que vai ser impresso", ";;");

echo EscolherImpressao::imprimir($maquina);