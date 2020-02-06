<?php

function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");

$item1 = new Item("Livro Antigo");
$item2 = new Item("Arma antiga");
$item3 = new Item("PS5");
$item4 = new Item("Cubos");

$chefeLeilao = new MediadorLeilao();

$participante1 = new Participante("Tio Patinhas", $chefeLeilao);
$participante2 = new Participante("Riquinho Rico", $chefeLeilao);
$participante3 = new Participante("Felix", $chefeLeilao);

$participante1->oferta('50', $item1);
$participante2->oferta('150', $item1);
$participante3->oferta('149', $item1);

$participante1->oferta('1000', $item3);
$participante2->oferta('1050', $item3);
$participante3->oferta('1409', $item3);

$participante1->oferta('25', $item4);
$participante2->oferta('15', $item4);
$participante3->oferta('14', $item4);

$chefeLeilao->darResultados($item2);
echo "<hr>";
$chefeLeilao->darResultados($item1);

echo "<hr>";
$chefeLeilao->darResultados($item3);

echo "<hr>";
$chefeLeilao->darResultados($item4);