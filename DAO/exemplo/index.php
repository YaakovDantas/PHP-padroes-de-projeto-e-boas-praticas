<?php

class Usuario
{
    // Usuario aqui com seus atributos, getters e setters.
    private $nome;
    function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }
}

//
class UsuarioDAO
{
    /**
     * Classe onde será responsável por receber um Usuário e ser capaz de fazer operações no BANCO
     *      referente a esse usuário.
     * Também responsável por obter a conexão com o BANCO(geramente algum Factory Pattern).
     * Para não gerar dependencia não usaremos nenhum tipo de BD.
     */

    private $con;
    function __construct()
    {
        $this->con = new BDconnection();
    } 

    public function salvarUsuario(Usuario $usuario)
    {
        $query = "INSERT INTO usuario (nome) VALUES ({$usuario->getNome()})";
        $con = $this->con->getCon();
        $con->query($query);
        // podemos retornar se foi salvo com Sucesso ou Não.
        return;
    }
}

class UsuarioService
{
    // Classe que irá será chamada pelo Controller, onde existe toda regra de negócio.
    // Qualquer operação relacinado com o Banco é passado para o DAO desejado.

    private $usuarioDAO;

    function __construct()
    {
        $this->usuarioDAO = new UsuarioDAO();
    }

    public function salvarUsuario($nome)
    {
        // Validações anteriores
        $usuario = new Usuario($nome);
        $resultado = $this->usuarioDAO->salvarUsuario($usuario);
        // retornando resultado para controller 
    }
}