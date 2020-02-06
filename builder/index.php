<?php 

$raiz = '/builder/';
?>
<h3>Builder</h3>
<h4>Definição:</h4>
<p>É usado para abstrair a lógica de criação de um objeto complexo.</p>

<p>Quando se tem um objeto muito complexo de ser criado, onde precisa de muita lógica e criação de outros objetos como parametro.</p>

<p>O ideal é usar o <a href="https://pt.wikipedia.org/wiki/Builder" target="_blank">Design Pattern Builder</a></p>

<p>Usando esse padrão, vai existir uma classe especializada em receber os paramestros desse objeto, por funções, e cada função vai fazer o preparamento para criar esse parametro, no final é chamado um método que devolve de fato o objeto que se deseja criar.</p>

<hr>
Exemplos
<ul>
    <li>
        <a href="<?=$raiz?>seriado">Seriado</a>
    </li>
</ul>

