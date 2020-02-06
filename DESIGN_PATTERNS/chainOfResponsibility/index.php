<?php 

$raiz = '/chainOfResponsibility/';
?>
<h3>Chain of Responsibility</h3>
<h4>Definição:</h4>
<p>Cria uma cadeia de eventos, onde um objeto recebe o proximo, a cada objeto da vez, é feito uma condição, se não for aceita, vai para o próximo.</p>

<p>Em vez de criar uma função enorme com vários IF's, onde no futuro será dificil de manter.</p>

<p>O ideal é usar o <a href="https://pt.wikipedia.org/wiki/Chain_of_Responsibility" target="_blank">Design Pattern Chain of Responsibility</a></p>

<p>Nele cada Classe é responsável por sua condição de teste, e saber qual é o próximo, com cada logica bem definida e desacoplada em cada Objeto</p>

<hr>
Exemplos
<ul>
    <li>
        <a href="<?=$raiz?>desconto">Desconto</a>
    </li>
    <li>
        <a href="<?=$raiz?>impressora">Impressora</a>
    </li>
</ul>