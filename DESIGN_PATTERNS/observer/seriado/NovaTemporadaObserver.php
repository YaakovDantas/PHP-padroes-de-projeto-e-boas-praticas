<?php

interface NovaTemporadaObserver
{
    public function notificarTemporada(Seriado $serie, Temporada $temporada);
}