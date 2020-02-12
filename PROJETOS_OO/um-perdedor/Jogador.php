<?php

class Jogador
{
    private $nome;
    private $zeroOuUm = [0, 1];
    private $parOuImpar = ['par', 'impar'];
    private $escolhaZeroOuUm;
    private $escolhaParOuImpar;
    private $numero;

    public function __construct($nome)
    {
        $this->nome = $nome;
        shuffle($this->zeroOuUm);
        $this->escolhaZeroOuUm = $this->zeroOuUm[0];
        shuffle($this->parOuImpar);
        $this->escolhaParOuImpar = $this->parOuImpar[0];
        $this->numero = rand(1, 25);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getEscolhaParOuImpar()
    {
        return $this->escolhaParOuImpar;
    }

    public function getZeroOuUm()
    {
        return $this->escolhaZeroOuUm;
    }

    public function setOpostoParOuImpar($string)
    {
        $this->escolhaParOuImpar = $string === 'par' ? 'impar' : 'par';
    }

    public function trocarEscolha()
    {
        shuffle($this->zeroOuUm);
        $this->escolhaZeroOuUm = $this->zeroOuUm[0];
    }

    public function compararNumero($numero)
    {
        $avaliacao = $numero % 2  == 0 ? 'par' : 'impar' ;
        
        if ($avaliacao !== $this->escolhaParOuImpar) {
            echo " O jogador {$this->nome} perdeu, com {$this->escolhaParOuImpar}, o numero era $numero <br>";   
        }
    }
}