<?php

function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");

$dia = new Data("28"); 
$mes = new Data("08");
$ano = new Data("1993");

$formatoBRparaEUA = new FormatoDMYParaYMD($ano, $mes, $dia);
$formatoEUAparaBR = new FormatoYMDParaDMY($ano, $mes, $dia);


echo $formatoEUAparaBR->avalia();
echo "<br/>";
echo $formatoBRparaEUA->avalia();