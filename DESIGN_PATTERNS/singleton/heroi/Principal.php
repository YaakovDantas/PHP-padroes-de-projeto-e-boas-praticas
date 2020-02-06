<?php

class Principal
{
    private $nome = "Rambo";
    private $vida = 100;
    private static $instance;
    
    private function __construct() {}

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }
           
        return self::$instance;
    }

    public function getVida()
    {
        return $this->vida;
    }

    public function setVida($vida)
    {
        $this->vida = $vida;
    }
}