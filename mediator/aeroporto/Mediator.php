<?php

interface Mediator
{
    function propostaSair(Colega $colega, $hora);
    function propostaChegar(Colega $colega, $hora);
}