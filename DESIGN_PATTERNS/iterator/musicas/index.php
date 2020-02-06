<?php

function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");

$info1 = new MusicaInfo("Bryan Adams", 90);
$info2 = new MusicaInfo("Backstreet Boys", 90);
$info3 = new MusicaInfo("REM", 90);
$info4 = new MusicaInfo("U2", 90);
$info5 = new MusicaInfo("JAY-Z", 90);

$musicas90 = new Musicas90();
$musicas90->add($info1);
$musicas90->add($info2);
$musicas90->add($info3);
$musicas90->add($info4);
$musicas90->add($info5);

$crescente = new MusicasIteratorCrescente($musicas90);

while($crescente->valid()){
    $musica = $crescente->next();
    $musica->info();
}

$info1 = new MusicaInfo("Eminem", 2000);
$info2 = new MusicaInfo("Usher", 2000);
$info3 = new MusicaInfo("Justim Timberlake", 2000);
$info4 = new MusicaInfo("50 cent", 2000);
$info5 = new MusicaInfo("JAY-Z", 2000);

$musicas00 = new Musicas00();
$musicas00->add($info1);
$musicas00->add($info2);
$musicas00->add($info3);
$musicas00->add($info4);
$musicas00->add($info5);

$decrescente = new MusicasIteratorDecrescente($musicas00);

echo "<hr>";
while($decrescente->valid()){
    $musica = $decrescente->next();
    $musica->info();
}
echo "<hr>";
$decrescente->back();
$decrescente->back();
$musica = $decrescente->current();
$musica->info();
