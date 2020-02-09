<?php

    $pastas = [
        "SOLID" => "S.O.L.I.D.",
        "DESIGN_PATTERNS" => "PADRÕES DE PROJETO (DESIGN PATTERN)",
        "SERVICE_REPOSITORY" => "PADRÂO SERVIÇO-REPOSITORIO (SERVICE REPOSITORY)",
        "MVC" => 'MVC(MODEL-VIEW-CONTROLLER)',
        "DAO" => 'DAO(DATA ACCESS OBJECT)',
    ];
?>

<h1>PADRÔES E PADRÔES NADA MAIS DO QUE PADRÔES E BOAS PRATICAS</h1>

<h3>LISTA</h3>
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