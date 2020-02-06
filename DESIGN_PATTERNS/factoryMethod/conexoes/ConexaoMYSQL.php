<?php
class ConexaoMYSQL
{
    private $nome = "banco_1_sql";
    private $usuario = "meu_2user";
    private $senha = "@123!";

    public function getNome()
    {
        return $this->nome;
    }
    public function getUsuario()
    {
        return $this->usuario;
    }
    public function getSenha()
    {
        return $this->senha;
    }
}