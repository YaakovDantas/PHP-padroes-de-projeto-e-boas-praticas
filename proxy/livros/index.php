<?php

function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");

$usuario = new Usuario("1233");
// $usuario = new Usuario("1234");

$livro1 = new Livro("Leonard", "Sheldon u a crazy");
$livro2 = new Livro("Roward", "Do u like magic");
$livro3 = new Livro("Raj", "Low fat diet");
$livro4 = new Livro("Shelom", "Nobel price in mind");

$proxyPrateleira = new Proxy();

$proxyPrateleira->add($livro1);

$proxyPrateleira->setUsuario($usuario);

$proxyPrateleira->add($livro4);

// $proxyPrateleira->lista();

$proxyPrateleira->add($livro3);
$proxyPrateleira->add($livro2);

$proxyPrateleira->lista();