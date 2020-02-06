<?php

class ConexaoFactory
{
    public function getConexao($banco)
    {
        if ($banco == "MYSQL") {
            return new ConexaoMYSQL();
        } else if ($banco == "MONGO") {
            return new ConexaoMONGO();
        } else {
            return null;
        }
    }
}