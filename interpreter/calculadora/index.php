<?php

function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");

$numero1 = new Numero(3);
$numero2 = new Numero(3);

$numero3 = new Numero(2);
$numero4 = new Numero(5);

$soma1 = new Multiplicacao($numero1, $numero2);
$soma2 = new Subtracao($numero3, $numero4);

# (3 * 3) + (2 - 5)
$final = new Soma($soma1, $soma2);
echo $final->avalia();

echo "<br/>";

# (2 - 4) + (4 * 4)
$final = new Soma(
            new Subtracao(
                new Numero(2), new Numero(4)
            ), 
            new Multiplicacao(
                new Numero(4), new Numero(4)
            )
        );

echo $final->avalia();