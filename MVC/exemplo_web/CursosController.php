<?php

class CursosController
{

    function __construct()
    {
        $this->CursoModel = new CursoModel();
    }

    public function index()
    {
        $cursos = $this->CursoModel->all();
        require "curso-view-index.php";
    }

    public function create()
    {
        require "curso-view-create.php";
    }

    public function store($post)
    {
        $this->CursoModel->salvar($post['descricao']);
        $cursos = $this->CursoModel->all();
        require "curso-view-index.php";
    }
}