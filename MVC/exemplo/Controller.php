<?php
    function carregaClasse($classe)
    {
        require $classe.".php";
    }

    spl_autoload_register("carregaClasse");

    class Controller 
    {
        function __construct()
        {
            $this->model = new Model();
            $this->view = new View();
        }

        function calcular($num1, $num2)
        {
            $this->model->calcularResultado($num1, $num2);
            $this->view->setResultado($this->model->getResultado());
            return $this->view->gerarView();
        }
    }

    $c = new Controller();

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    $c->calcular($num1, $num2);