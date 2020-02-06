<?php

class Televisao implements SeriadoObserver, NovaTemporadaObserver
{
    public function notificar(Seriado $seriado)
    {
        $nome = $seriado->getNome();
        foreach($seriado->getTemporadas() as $temporada) {
            $numero = $temporada->getNumero();
            $epis = $temporada->getEpis();
            echo "<br/> Este $nome tem uma nova $numero temporada, com $epis epis, assista as 21hrs.<br/>";
        }
    }

    public function notificarTemporada(Seriado $serie, Temporada $temporada)
    {
        $nome = $serie->getNome();
        $numero = $temporada->getNumero();
        $epis = $temporada->getEpis();
        echo "<br/> Alerta Nova Temporada: Nova temporada de $nome, $numero º, com $epis novos epis, lançamento hoje as 21hrs.<br/>";
    }
}