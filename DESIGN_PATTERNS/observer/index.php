<?php 

$raiz = './observer/';
?>
<h3>Observer</h3>
<h4>Definição:</h4>
<p>Quando se quer acionar algum evento, ou alterar alguma váriavel em objetos que estão esperando alguma ação de um outro objeto.</p>

<p>Imagine que deseja informar a todos os seus clientes que foi criado um novo desconto, em vez de ficar esperando essa mudança no banco, para depois notificar a todos.</p>

<p>O ideal é usar o <a href="https://pt.wikipedia.org/wiki/Observer" target="_blank">Design Pattern Observer</a></p>

<p>Podemos colocar um ou mais Observador(es) que será chamado quando um desconto for feito, assim enviando a notificação, talvez enviado para a Adm, Marketing.</p>

<hr>
Exemplos
<ul>
    <li>
        <a href="<?=$raiz?>seriado">Seriado</a>
    </li>
</ul>

