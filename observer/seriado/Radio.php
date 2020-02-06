<?php

class Radio implements SeriadoObserver
{
    public function notificar(Seriado $seriado)
    {
        $nome = $seriado->getNome();
        echo "<br/> Novo seriado $nome assista na CBS as 21hrs.<br/>";
    }
}