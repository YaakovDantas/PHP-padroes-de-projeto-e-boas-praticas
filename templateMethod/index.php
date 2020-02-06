<?php 

$raiz = '/templateMethod/';
?>
<h3>Template Method</h3>
<h4>Definição:</h4>
<p>Quando se vários objetos que precisam ter uma condição por exemplo, para entregar algo, e essa lógica é definida em uma classe pai.</p>

<p>Se existem várias classes que calculam imposto, mas tem que existir uma condição entre cada uma delas, fica ruim de manter esse código, pois se alterar no futuro, todos os objetos devem ser alterados.</p>

<p>O ideal é usar o <a href="https://pt.wikipedia.org/wiki/Template_Method" target="_blank">Design Pattern Template Method</a></p>

<p>Assim tendo uma classe PAI, de como é o template dessa lógica, os FILHOS dessa classe só precisam implementar as funções de condições e resultados.</p>

<hr>
Exemplos
<ul>
    <li>
        <a href="<?=$raiz?>imposto">Imposto</a>
    </li>
</ul>

