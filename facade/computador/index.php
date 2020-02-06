<?php

function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");

$computador = new ComputadorFacade();

echo "Ligando...<br/>";
$computador->ligarPC();


echo "Salvando...<br/>";
$computador->salvar(1341, "Filme ABC");
