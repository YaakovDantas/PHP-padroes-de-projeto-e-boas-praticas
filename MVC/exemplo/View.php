<?php

class View
{
    private $resultadoView = null;

    function setResultado($novoValor)
    {
        $this->resultadoView = $novoValor;
    }

    function gerarView()
    {
        echo "
            <html>
                Resultado = $this->resultadoView
            </html>
        ";
    }
}


?>

