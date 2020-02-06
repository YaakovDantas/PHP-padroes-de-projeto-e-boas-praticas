<?php 

$raiz = '/command/';
?>
<h3>Command</h3>
<h4>Definição:</h4>
<p>Usado geralmente para processamento de Listas de Objetos ASYNC.</p>

<p>O ideal é usar o <a href="https://pt.wikipedia.org/wiki/Command" target="_blank">Design Pattern Command</a></p>

<p>Criando uma lista de processamento, onde recebe vários comandos, futuramente pode-se ler essa lista e fazer seus comandos especificos, transparetemene para o usuário e o processador da lista.</p>

<hr>
Exemplos
<ul>
    <li>
        <a href="<?=$raiz?>pedidos">Pedidos</a>
    </li>
    <li>
        <a href="<?=$raiz?>interruptor">Interruptor</a>
    </li>
</ul>

