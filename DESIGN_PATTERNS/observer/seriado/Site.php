<?php

class Site implements SeriadoObserver, NovaTemporadaObserver
{
    public function notificar(Seriado $seriado)
    {
        $nome = $seriado->getNome();
        $duracaoTotal = $seriado->getDuracaoTotal();
        echo "<br/>Site: Seriado $nome novo duração total de $duracaoTotal hrs.<br/>";
    }

    public function notificarTemporada(Seriado $serie, Temporada $temporada)
    {
        $nome = $serie->getNome();
        $numero = $temporada->getNumero();
        $epis = $temporada->getEpis();
        echo "<br/>Site: Alerta Nova Temporada: Nova temporada de $nome, $numero º, com $epis novos epis.<br/>";
    }
}