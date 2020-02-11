<?php 

$raiz = './strategy/';
?>
<h3>Strategy</h3>
<h4>Definição:</h4>
<p>Qual é preciso definir um método em comum para todos os objetos.</p>

<p>Quando se tem várias classes e todas fazem uma mesma função de calcular algum desconto, essas classes podem ter métodos diferentes entre elas, mas que fazem o mesma função.</p>

<p>O ideal é usar o <a href="https://pt.wikipedia.org/wiki/Strategy" target="_blank">Design Pattern Strategy</a></p>

<p>Assim tendo um método em comum por uma Interface, todos que fizerem o contrato com ela, vão fazer aquele método de calcular com um nome padrão, assim tornando mais fácil de chamar qualquer uma desses metodos entre as classes.</p>

<hr>
Exemplos
<ul>
    <li>
        <a href="<?=$raiz?>comissao">Comissao</a>
    </li>
    <li>
        <a href="<?=$raiz?>conta">Conta</a>
    </li>
    <li>
        <a href="<?=$raiz?>imposto">Imposto</a>
    </li>
</ul>

