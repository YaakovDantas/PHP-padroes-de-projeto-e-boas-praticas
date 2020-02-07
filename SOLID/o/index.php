<?php
    $raiz = "o/";
    $pastas = [
        $raiz."sem" => "Sem SRP",
        $raiz."com" => "Com SRP",
    ];
?>
<h2>
OCP - Open/Closed Principle
</h2>
<p>
Princípio do Aberto/Fechado - Você deve ser capaz de estender um comportamento de uma classe sem a necessidade de modificá-lo.
</p>

Exemplos:
<ul>
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
</ul>