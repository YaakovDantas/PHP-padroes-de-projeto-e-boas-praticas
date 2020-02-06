<?php 

class DescontoPapelEBolsa implements Desconto
{
    function __construct(Desconto $proximo = null)
    {
        $this->proximo = $proximo;
    }

    public function desconto(Lista $lista)
    {
        if ($this->temCasal($lista->getLista(), 'PAPEL') 
            && $this->temCasal($lista->getLista(), 'BOLSA')
        ) {
            return 'Desconto de 55 reais';
        } else if (!is_null($this->proximo)) {
            return $this->proximo->desconto($lista);
        }
        return 'Nenhum desconto aplicado';
    }

    private function temCasal($lista, $nome)
    {
        foreach ($lista as $item) {
            if ($item->getNome() === $nome) {
                return true;
            }
        }
        return false;
    }
}