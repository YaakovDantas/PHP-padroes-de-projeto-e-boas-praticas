<?php 

class Desconto240Reais implements Desconto
{
    function __construct(Desconto $proximo = null)
    {
        $this->proximo = $proximo;
    }

    public function desconto(Lista $lista)
    {
        if ($this->somaItens($lista->getLista()) == 240) {
            return 'Desconto de 24 reais';
        } else if (!is_null($this->proximo)) {
            return $this->proximo->desconto($lista);
        }
        return 'Nenhum desconto aplicado';
    }

    private function somaItens($lista)
    {
        $contador = 0;
        foreach ($lista as $item) {
            $contador += $item->getValor();
        }
        return $contador;
    }
}