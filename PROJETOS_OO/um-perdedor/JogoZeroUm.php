<?php


class JogoZeroUm
{
    private $jogadores = [];
    
    public function __construct($nome1, $nome2, $nome3)
    {
        $this->jogadores[0] = new Jogador($nome1);
        $this->jogadores[1] = new Jogador($nome2);
        $this->jogadores[2] = new Jogador($nome3);
    }

    public function pegarVencedor()
    {
        $this->jogadoresTrocamNumerosSeForemTodosIguais();
        $this->removerVencedorDaLista();
    }

    public function pegarPerdedores()
    {
        $perdedores = [];
        foreach ($this->jogadores as $jogador) {
            array_push($perdedores, $jogador);
        }
        return $perdedores;
    }

    private function todosIguais($somaTotal)
    {
        if ( ($somaTotal == 0) || ($somaTotal == 3) ) {
            return true;
        } else {
            return false;
        }
    }

    private function fazerJogadoresTrocarOpcoes()
    {
        foreach ($this->jogadores as $jogador) {
            $jogador->trocarEscolha();
        }
    }

    private function buscarJogadorQueJogouUm()
    {
        foreach ($this->jogadores as $key => $jogador) {
            if ($jogador->getZeroOuUm() == 1 ) {
                // echo " O jogador {$jogador->getNome()} venceu, com {$jogador->getZeroOuUm()} <br>";
                unset($this->jogadores[$key]);
                return true;
            }
        }
        return false;
    }

    private function buscarJogadorQueJogouZero()
    {
        foreach ($this->jogadores as $key => $jogador) {
            if ($jogador->getZeroOuUm() == 0 ) {
                // echo " O jogador {$jogador->getNome()} venceu, com {$jogador->getZeroOuUm()} <br>";
                unset($this->jogadores[$key]);
                return true;
            }
        }
        return false;
    }

    private function removerVencedorDaLista()
    {
        $somaTotal = $this->pegarSomaTotal();
        if ($somaTotal == 1) {
            $this->buscarJogadorQueJogouUm();
        } else {
            $this->buscarJogadorQueJogouZero();
        }
    }

    private function jogadoresTrocamNumerosSeForemTodosIguais()
    {
        $somaTotal = $this->pegarSomaTotal();
        while ($this->todosIguais($somaTotal)) {
            $this->fazerJogadoresTrocarOpcoes();
            $somaTotal = $this->pegarSomaTotal();
        }
    }

    private function pegarSomaTotal()
    {
        $opcoes = [
            $this->jogadores[0]->getZeroOuUm(),
            $this->jogadores[1]->getZeroOuUm(),
            $this->jogadores[2]->getZeroOuUm(),
        ];

        return array_sum($opcoes);
    }
}