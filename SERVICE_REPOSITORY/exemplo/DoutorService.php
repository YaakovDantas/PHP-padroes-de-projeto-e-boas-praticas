<?php

class DoutorService
{
    /**
     * Abstração da classe DoutorService está sendo chamada por outra Classe
     * Como um Controller
     */

    function __construct(DoutorRepository $repositorio)
    {
        $this->repositorio = $repositorio;
    }

    function salvar($dados)
    {
        /**
         * Logica para receber os dados e validar eles
         * chamar o $this->repositorio->salvar()
         * retornar sucesso/falha
         */
    }

    function buscar($id)
    {
        /**
         * Logica para receber os dados e validar eles
         * chamar o $this->repositorio->buscar($id)
         * retornar sucesso/falha
         */
    }
    
    function alterar($id, $novosDados)
    {
        /**
         * Logica para receber os dados e validar eles
         * chamar o $this->repositorio->alterar($id, $novosDados)
         * retornar sucesso/falha
         */
    } 
}