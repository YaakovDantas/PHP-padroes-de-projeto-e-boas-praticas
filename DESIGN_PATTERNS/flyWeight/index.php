<?php 

$raiz = '/flyWeight/';
?>
<h3>Flyweight</h3>
<h4>Definição:</h4>
<p>Quando se vai criar milhares de objetos iguais, antes de criar um objeto é verificado se já existe ele em uma lista se existir este objeto craido anteriormente é devolvido, caso não objeto é criado e adicionado na lista de objetos criados.</p>

<p>O ideal é usar o <a href="https://pt.wikipedia.org/wiki/Flyweight" target="_blank">Design Pattern Flyweight</a></p>

<hr>
Exemplos
<ul>
    <li>
        <a href="<?=$raiz?>livros">Livros</a>
    </li>
    <li>
        <a href="<?=$raiz?>endereco">Endereços</a>
    </li>
</ul>

