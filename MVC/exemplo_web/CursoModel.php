<?php

class CursoModel
{
    function __construct()
    {
        $this->cursos = [
            new Curso('POO'),
            new Curso('Padroes de Projeto'),
            new Curso('MVC'),
        ];
    }

    function all()
    {
        return $this->cursos;
    }

    function salvar($descricao)
    {
        $curso = new Curso($descricao);
        $this->cursos[] = $curso;
    }
}