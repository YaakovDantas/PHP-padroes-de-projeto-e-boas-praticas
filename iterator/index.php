<?php 

$raiz = '/iterator/';
?>
<h3>Iterator</h3>
<h4>Definição:</h4>
<p>Quando se quer abstrair a forma de ler uma LISTA, PILHA, FILA, DICIONARIO de forma transparente.</p>

<p>No lugar de usar diferentes For's, While's para cada tipo de estrutura é criado um Iterator. Assim o cliente só precisa saber se existe um Proximo elemento na lista, Pegar o Proximo elemento, assim por diante.</p>

<p>O ideal é usar o <a href="https://pt.wikipedia.org/wiki/Iterator" target="_blank">Design Pattern Iterator</a></p>

<p>Assim é possivel criar de forma transparente, várias formas de ler uma lista por exemplo, pode ter um iterator para Ler crescentemente, ou decrescente, só indices pares, cada lógica de leitura ficará em um Iterator responsável.</p>

<hr>
Exemplos
<ul>
    <li>
        <a href="<?=$raiz?>musicas">Musicas</a>
    </li>
    <!-- <li>
        <a href="<?=$raiz?>processo">Processo</a>
    </li> -->
</ul>

