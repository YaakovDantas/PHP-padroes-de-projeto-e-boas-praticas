<?php

    require "Funcionario.php";
    require "Venda.php";
    require "Gerente.php";
    require "Vendedor.php";

    $venda = new Venda(555);

    $gerente =  new Gerente();

    
    echo $gerente->calcular($venda);

    echo "<br/>";

    $vendedor = new Vendedor();

    echo $vendedor->calcular($venda);

    echo "<br/>";
