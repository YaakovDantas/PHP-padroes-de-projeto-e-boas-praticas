<?php 

$raiz = './decorator/';
?>
<h3>Decorator</h3>
<h4>Definição:</h4>
<p>É usado para dar funções a uma classe ou conjunto delas de uma mesma hierarquia/família.</p>

<p>Imagine que você tem uma calculadora e duas classes: Somar e Subtrair, 
caso queria o Resultado de uma Soma + Subtração seria necessário criar uma outra classe SomaSubtracao,
isto não é viavel caso no futuro venha a exitir multiplas Classes para várias combinações.</p>

<p>O ideal é usar o <a href="https://pt.wikipedia.org/wiki/Decorator" target="_blank">Design Pattern Decorator</a></p>

<p>Nele é possivel dar a flexibilidade de "Unir" comportamentos de Classes já existentes sem necessitar criar novas</p>

<hr>
Exemplos
<ul>
    <li>
        <a href="<?=$raiz?>calculadora">Calculadora</a>
    </li>
    <li>
        <a href="<?=$raiz?>pizza">Pizza</a>
    </li>
    <li>
        <a href="<?=$raiz?>imposto">Imposto</a>
    </li>
</ul>

