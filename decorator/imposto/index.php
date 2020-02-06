<?php
    require "Imposto.php";
    require "ImpostoDecorator.php";
    require "Orcamento.php";
    require "CalculadoraDeImpostos.php";
    require "ICMS.php";
    require "ISS.php";

    $reforma = new Orcamento(500);

    $calculadora = new CalculadoraDeImpostos();

    echo $calculadora->calcula($reforma,new ICMS(new  ISS()));
    // echo $calculadora->calcula($reforma,new ICMS());

    echo "<br/>";

    echo $calculadora->calcula($reforma,new ISS());
