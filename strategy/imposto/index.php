<?php
    require "Imposto.php";
    require "Orcamento.php";
    require "CalculadoraDeImpostos.php";
    require "ICMS.php";
    require "ISS.php";
    require "KCV.php";
    require "ICCC.php";

    $reforma = new Orcamento(500);

    $calculadora = new CalculadoraDeImpostos();

    echo $calculadora->calcula($reforma,new ICMS());

    echo "<br/>";

    echo $calculadora->calcula($reforma,new ISS());

    echo "<br/>";

    echo $calculadora->calcula($reforma,new KCV());

    echo "<br/>";

    $novoImposto = new ICCC();

    echo $novoImposto->calcula($reforma);