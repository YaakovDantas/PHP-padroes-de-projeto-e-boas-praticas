<?php

class DoutorRepository implements DoutorRepositoryInterface
{
    protected $model;

    public function __construct(Doutor $model)
    {
        $this->model = $model;
    }

    function salvar(Doutor $doutor)
    {
        // logíca para salvar
    }

    function buscar($id)
    {
        // logíca para buscar
    }
    
    function alterar(Doutor $doutor, $novosDados)
    {
        // logíca para update
    }
}