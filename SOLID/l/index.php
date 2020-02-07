<?php
    $raiz = "l/";
    $pastas = [
        $raiz."sem" => "Sem SRP",
        $raiz."com" => "Com SRP",
    ];
?>
<h2>
LSP - Liskov Substitution Principle

</h2>
<p>
Princípio da substituição de Liskov - As classes derivadas devem ser substituíveis por suas classes bases.
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