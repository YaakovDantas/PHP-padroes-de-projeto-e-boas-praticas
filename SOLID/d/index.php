<?php
    $raiz = "d/";
    $pastas = [
        $raiz."sem" => "Sem SRP",
        $raiz."com" => "Com SRP",
    ];
?>
<h2>
    DIP - Dependency inversion principle
</h2>
<p>
    Princípio da inversão de dependência - Dependa de abstrações e não de implementações.
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