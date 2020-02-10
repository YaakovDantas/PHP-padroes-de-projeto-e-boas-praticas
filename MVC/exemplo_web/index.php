<?php
function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");

switch ($_SERVER['PATH_INFO']) {
    case '/listar-cursos':
        $curso = new CursosController();
        $curso->index();
        break;
    case '/novo-curso':
        $curso = new CursosController();
        $curso->create();
        break;
    case '/salvar-curso':
        $curso = new CursosController();
        $curso->store($_POST);
        break;

}

/**
 * Para facilitar não teremos de fato persistencia com banco de dados, 
 * teremos 1 array e o CRUD será nele.
 * Para não utilizar composer nem nenhuma outra dependência externa, 
 * todos os arquivos ficaram na mesma raiz
 * ATENÇÂO
 * EXISTEM ALGUNS BUGS, MAS A IDEIA DO MVC ESTA EM PRATICA
 */