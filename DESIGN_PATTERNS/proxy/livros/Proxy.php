<?php

class Proxy {

    function __construct() 
    {
        $this->prateleira = NULL;
        $this->usuario = NULL;
    }  

    function add(Livro $livro) {
        $this->verificaPrateleira();
        if ($this->verificaUsuario()) {
            return $this->prateleira->add($livro);
        }
    }    

    function lista() {
        $this->verificaPrateleira();
        $this->prateleira->mostrarLivros();
    }

    function setUsuario(Usuario $usuario)
    {
        $this->usuario = $usuario;
    }
    
    private function verificaPrateleira()
    {
        if (NULL == $this->prateleira) {
            $this->prateleira = new Prateleira();
        } 
    }
    
    private function validaSenha()
    {
        if ("1234" !== $this->usuario->getSenha()) {
            // echo "usuário invalido <br>";
            return false;
        } else {
            return true;
        }
    }

    private function verificaUsuario()
    {
        if (NULL === $this->usuario) {
            return true;
        } else {
            return $this->validaSenha();
        }
    }
}