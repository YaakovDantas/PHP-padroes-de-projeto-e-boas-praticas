<?php

interface DoutorRepositoryInterface
{
    function salvar(Doutor $doutor);
    function buscar($id);
    function alterar(Doutor $doutor, $novosDados);
}