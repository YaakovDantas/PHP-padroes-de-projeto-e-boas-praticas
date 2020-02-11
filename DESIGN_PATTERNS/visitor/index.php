<?php 

$raiz = './visitor/';
?>
<h3>Visitor</h3>
<h4>Definição:</h4>
<p>Permite que crie uma nova operação/lógica sem que altere uma classe já criada.</p>

<p>Em vez de alterar/criar um novo método para fazer uma nova funcionalidade, e alterar todo o código.</p>

<p>O ideal é usar o <a href="https://pt.wikipedia.org/wiki/Visitor_Pattern" target="_blank">Design Pattern Visitor</a></p>

<p>Só alterando a classe que aceita aceita um visitor, o visitor especifico vai ser chamado e operar sua lógica, sem alterar na classe principal.</p>

<hr>
Exemplos
<ul>
    <li>
        <a href="<?=$raiz?>imposto">Imposto</a>
    </li>
    <li>
        <a href="<?=$raiz?>mercado">Mercado</a>
    </li>
</ul>

