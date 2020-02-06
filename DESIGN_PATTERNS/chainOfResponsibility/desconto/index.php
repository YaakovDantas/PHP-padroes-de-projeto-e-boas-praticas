<?php
    require "Desconto.php";
    require "Desconto4Itens.php";
    require "DescontoPapelEBolsa.php";
    require "Desconto240Reais.php";
    require "Chain.php";
    require "Lista.php";
    require "Item.php";

    $lista = new Lista();

    $lista->addItem(new Item('LAPIS', 100));
    $lista->addItem(new Item('CANETA', 1420));
    $lista->addItem(new Item('PAPEL', 50));
    // $lista->addItem(new Item('BOLSA', 40));
    $lista->addItem(new Item('LIVRO', 25));

    $chain = new Chain();

    echo "<br/>";
    echo $chain->acharDesconto($lista);
