<?php
class ConexaoMONGO
{
    private $nome = "banco_1";
    private $usuario = "meu_user";
    private $senha = "#123!";

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