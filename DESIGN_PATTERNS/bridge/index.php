<?php 

$raiz = './bridge/';
?>
<h3>Bridge</h3>
<h4>Definição:</h4>
<p>É usado quando se quer separar responsabilidades entre objetos.</p>

<p>Imagine uma classe TV, nela pode desligar, ligar, também é possivel alterar de canal, ficar mudo, isso não é uma boa prática, onde a funcionalidade de ficar mudo por exemplo, deveria ser responsibilidade de outra classe como ControleRemoto.</p>

<p>O ideal é usar o <a href="https://pt.wikipedia.org/wiki/Bridge_(padr%C3%A3o_de_projeto_de_software)" target="_blank">Design Pattern Bridge</a></p>

<p>Com o Bridge, é possivel separar as responsabilidades, onde a TV é responsavel por suas unicas funcinalidades e o ControleRemoto, recebe uma TV que tem suas responsabilidades e é capaz de chamar métodos da TV.</p>

<hr>
Exemplos
<ul>
    <li>
        <a href="<?=$raiz?>aparelhos">aparelhos</a>
    </li>
    <li>
        <a href="<?=$raiz?>carro">carro</a>
    </li>
</ul>

