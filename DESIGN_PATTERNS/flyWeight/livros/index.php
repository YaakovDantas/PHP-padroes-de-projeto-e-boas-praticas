<?php

function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");

 
$flyweight = new Flyweight();
$prateleira1 =  new Prateleira();
$livro1 = $flyweight->pegarLivro(1);
$prateleira1->add($livro1);
$livro2 = $flyweight->pegarLivro(1);
$prateleira1->add($livro2);

escreve('test 1 - show the two books are the same book');
if ($livro1 === $livro2) {
   escreve('1 and 2 are the same');
} else {
   escreve('1 and 2 are not the same');    
}
escreve('');

escreve('test 2 - with one book on one self twice');
escreve($prateleira1->mostrarLivros());
escreve('');

$prateleira2 =  new Prateleira(); 
$livro1 = $flyweight->pegarLivro(2);  
$prateleira2->add($livro1);
$prateleira1->add($livro1);

escreve('test 3 - book shelf one');
escreve($prateleira1->mostrarLivros());
escreve('');

escreve('test 3 - book shelf two');
escreve($prateleira2->mostrarLivros());
escreve('');

function escreve($line_in) {
  echo $line_in."<br/>";
}