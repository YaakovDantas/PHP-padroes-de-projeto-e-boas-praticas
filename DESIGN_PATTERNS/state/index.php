<?php 

$raiz = './state/';
?>
<h3>State</h3>
<h4>Definição:</h4>
<p>Quando se quer colocar uma cadeia de estados, contrar o estado atual e para onde pode ir ou não.</p>

<p>Fazer um objeto ter um atributo com os valores [1,2,3,4] para seus estados é ruim, no futuro pode vir a ter outros estados e é ruim saber qual numero é referente a qual estado.</p>

<p>O ideal é usar o <a href="https://pt.wikipedia.org/wiki/State" target="_blank">Design Pattern State</a></p>

<p>Com ele o Objeto só recebe um Estado por vez, que são outros objetos, e cada objeto de Estado diz o estado atual, para onde pode ir ou não, com todas as suas lógicas separadas por estado/Objeto.</p>

<hr>
Exemplos
<ul>
    <li>
        <a href="<?=$raiz?>namoro">Namoro</a>
    </li>
    <li>
        <a href="<?=$raiz?>processo">Processo</a>
    </li>
</ul>

