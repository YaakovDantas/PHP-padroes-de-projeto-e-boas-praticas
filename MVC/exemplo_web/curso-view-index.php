<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h5>Listagem de cursos</h5>
    <ul>
        <?php foreach ($cursos as $curso): ?>
            <li>
                <?= $curso->getDescricao(); ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="novo-curso">Criar novo curso</a>
</body>
</html>