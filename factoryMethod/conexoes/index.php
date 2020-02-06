<?php

require "ConexaoFactory.php";
require "ConexaoMONGO.php";
require "ConexaoMYSQL.php";

$banco = 'MYSQL';
$banco = 'MONGO';

$fabrica = new ConexaoFactory();
$con = $fabrica->getConexao($banco);

if (!is_null($con)) {
    // echo $con->getNome()."<br />";
    // echo $con->getUsuario()."<br />";
    // echo $con->getSenha()."<br />";
    echo "<pre>";
    var_dump($con);
}