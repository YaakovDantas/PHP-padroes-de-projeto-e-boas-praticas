<?php 

    require "Investimento.php";
    require "Conta.php";
    require "Arrojado.php";
    require "Conservador.php";
    require "RealizadorDeInvestimentos.php";

    $conta = new Conta();
    $conta->deposita(1000);

    $realizador = new RealizadorDeInvestimentos();

    $realizador->realiza($conta, new Arrojado());
    $realizador->realiza($conta, new Conservador());

    echo $conta->getSaldo();