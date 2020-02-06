<?php


function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");



$phpProto = new PHPBook();
$sqlProto = new SQLBook();

$sqlProto->setTitle('PHP Iniciante');
escrever('Livro 1 Topico: '.$sqlProto->getTopic());
escrever('Livro 1 Titulo: '.$sqlProto->getTitle());
escrever('');

$sqlProto->setTitle('SQL Para novatos e gatos');
escrever('Livro 1 Topico: '.$sqlProto->getTopic());
escrever('Livro 1 Titulo: '.$sqlProto->getTitle());
escrever('');

$fabricaLivros = new FabricaLivros();

$book1 = $fabricaLivros->pegarClone($sqlProto);
$book1->setTitle('SQL Para gatos');
escrever('Livro 1 Topico: '.$book1->getTopic());
escrever('Livro 1 Titulo: '.$book1->getTitle());
escrever('');

// Tudo abaixo poderia ser clone de $book1 

$book2 = $fabricaLivros->pegarClone($phpProto);
$book2->setTitle('OReilly PHP 5');
escrever('Livro 2 Topico: '.$book2->getTopic());
escrever('Livro 2 Titulo: '.$book2->getTitle());
escrever('');

$book3 = $fabricaLivros->pegarClone($sqlProto);
$book3->setTitle('OReilly aprendendo SQL');
escrever('Livro 3 Topico: '.$book3->getTopic());
escrever('Livro 3 Titulo: '.$book3->getTitle());

function escrever($line_in) {
echo $line_in."<br/>";
}

?>