<?php

abstract class Aparelho
{
    function __construct($marca)
    {
        $this->marca = $marca;
        $this->OnOff = false;
    }

    abstract function botaoInput();

    function ligar()
    {
        $this->OnOff = !$this->OnOff;
        $estado = $this->OnOff === false ? 'Desligado' : 'Ligado';
        echo "O aparelho $this->marca está : $estado";
        echo"<br>";
    }
    
}