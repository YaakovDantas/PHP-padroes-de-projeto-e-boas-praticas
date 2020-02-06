<?php

class ImpostoNormal implements Visitor
{
    function visita(Produto $produto)
    {
        if ($produto instanceof Carne) {
            echo $produto->getValor() * 0.4."<br/>";
        } else if ($produto instanceof Cereal) {
            echo $produto->getValor() * 0.2."<br/>";
        } else if ($produto instanceof Liquido) {
            echo $produto->getValor() * 0 ."<br/>";
        }
    }
    
}