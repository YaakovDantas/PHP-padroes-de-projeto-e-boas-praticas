<?php

interface EstadosDoNamoro
{
    public function comecarSolteiro(Pessoa $pessoa);
    public function comecarNamoro(Pessoa $pessoa);
    public function comecarNoivado(Pessoa $pessoa);
    public function comecarCasamento(Pessoa $pessoa);
}