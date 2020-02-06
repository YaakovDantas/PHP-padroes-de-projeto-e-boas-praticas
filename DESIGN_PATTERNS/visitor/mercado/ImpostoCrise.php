<?php

class ImpostoCrise implements Visitor
{
    function visita(Produto $produto)
    {
        if ($produto instanceof Carne) {
            echo $produto->getValor() * 0.55 ."<br/>";
        } else if ($produto instanceof Cereal) {
            echo $produto->getValor() * 0.32 ."<br/>";
        } else if ($produto instanceof Liquido) {
            echo $produto->getValor() * 0.01 ."<br/>";
        }
    }
    
}