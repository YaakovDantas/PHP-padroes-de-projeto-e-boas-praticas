<?php 

require "Calculadora.php";
require "CalculadoraDecorator.php";
require "Soma.php";
require "Subtracao.php";
require "Multiplicador.php";

$calculadora = new Soma();

echo $calculadora->operacao(2,3).'<br/>';

$calculadora = new Soma(new Subtracao());

echo $calculadora->operacao(2,3).'<br/>';

$calculadora = new Soma(new Subtracao(new Multiplicador()));
$calculadora = new Multiplicador(new Subtracao(new Soma()));
$calculadora = new Subtracao(new Soma(new Multiplicador()));

echo $calculadora->operacao(2,4).'<br/>';

$calculadora = new Multiplicador();

echo $calculadora->operacao(2,3).'<br/>';
