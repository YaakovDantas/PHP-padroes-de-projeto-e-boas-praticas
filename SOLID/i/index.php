<?php
    $raiz = "i/";
    $pastas = [
        $raiz."sem" => "Sem SRP",
        $raiz."com" => "Com SRP",
    ];
?>
<h2>
Princípio da Segregação de Interfaces
</h2>
<p>
Muitas interfaces específicas são melhores do que uma interface única geral.
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