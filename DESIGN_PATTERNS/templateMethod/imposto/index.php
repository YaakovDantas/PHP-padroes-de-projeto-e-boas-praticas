<?php
    require "Imposto.php";
    require "Orcamento.php";
    require "ImpostoCondicional.php";
    require "CalculadoraDeImpostos.php";
    require "ICMS.php";
    require "ISS.php";

    $reforma = new Orcamento(400);

    $calculadora = new CalculadoraDeImpostos();

    echo $calculadora->calcula($reforma, new ICMS());

    echo "<br/>";

    echo $calculadora->calcula($reforma, new ISS());