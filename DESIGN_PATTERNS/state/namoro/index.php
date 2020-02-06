<?php 

require "EstadosDoNamoro.php";
require "Casado.php";
require "Noivo.php";
require "Solteiro.php";
require "Namora.php";
require "Pessoa.php";

$lucas = new Pessoa("Lucas");

echo $lucas->solteirar().'<br />';
echo $lucas->namorar().'<br />';
echo $lucas->noivar().'<br />';
echo $lucas->solteirar().'<br />';
echo $lucas->noivar().'<br />';
echo $lucas->casar().'<br />';
echo $lucas->namorar().'<br />';
echo $lucas->noivar().'<br />';
echo $lucas->casar().'<br />';
