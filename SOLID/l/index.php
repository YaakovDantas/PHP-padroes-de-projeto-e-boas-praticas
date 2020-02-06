<?php
    $raiz = "s/";
    $pastas = [
        $raiz."sem" => "Sem SRP",
        $raiz."com" => "Com SRP",
    ];
?>
<h2>
    SRP - Single Responsibility Principle
</h2>
<p>
    Princípio da Responsabilidade Única - Uma classe deve ter um, e somente um, motivo para mudar.
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