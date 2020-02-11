<?php

    $pastas = [
        "./SOLID/s" => "<b>S</b>ingle Responsibility Principle",
        "./SOLID/o" => "<b>O</b>pen / Cloed Principle",
        "./SOLID/l" => "<b>L</b>iskov Substituition Principle",
        "./SOLID/i" => "<b>I</b>nterface Segregation Principle",
        "./SOLID/d" => "<b>D</b>ependency Inversion Principle"
    ];
?>

<h1>
    S.O.L.I.D. 
</h1>

<h3>Definição:</h3>
<p>
Na programação de computadores orientada a objetos, o termo SOLID é um acrônimo para cinco postulados de design, destinados a facilitar a compreensão, o desenvolvimento e a manutenção de software.
</p>
<p>
Esses princípios são a base para vários Padrões e Projetos e tornam softwares mais evolutivos, de fácil manutenção e facilita mudanças necessárias após a finalização do projeto, não impactando em outras áreas do programa.
</p>


<h3>Principios</h3>
<ol>
    <?php
        foreach ($pastas as $key => $value) {
    ?>
        <li>
            <a href=<?=$key?> >
                <p>
                    <?=$value?>  
                </p>
            </a>
        </li>
    <?php
    }
    ?>
</ol>