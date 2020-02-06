<?php 

$raiz = '/mediator/';
?>
<h3>Mediator</h3>
<h4>Definição:</h4>
<p>Usado para lidar com a conversa entre 2 objetos, por um mediador.</p>

<p>2 aviões para pousar/decolar em um aeroporto não falam entre si, eles se comunicam com a Torre e a torre informa os 2 que acções podem tomar.</p>

<p>O ideal é usar o <a href="https://pt.wikipedia.org/wiki/Mediator" target="_blank">Design Pattern Mediator</a></p>

<p>Com isso o Mediator, controla a conversa entre os 2 ou mais Aviões(Colegas), informando a eles cada ação a tomar.</p>

<hr>
Exemplos
<ul>
    <li>
        <a href="<?=$raiz?>leilao">Leilao</a>
    </li>
    <li>
        <a href="<?=$raiz?>aeroporto">Aeroporto</a>
    </li>
</ul>

