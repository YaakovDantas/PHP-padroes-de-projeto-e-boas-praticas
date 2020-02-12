<?php

function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");

$jogoZeroUm = new JogoZeroUm("Huguinho", "Zezinho", "Luisinho");
$jogoZeroUm->pegarVencedor();
$perdedores = $jogoZeroUm->pegarPerdedores();

// var_dump($perdedores);

$jogador1 = $perdedores[0];
$jogador2 = $perdedores[1];
$jogador2->setOpostoParOuImpar($jogador1->getEscolhaParOuImpar());

$jogoParImpar = new JogoParImpar($jogador1, $jogador2);
$jogoParImpar->pegarVencedor();