<?php 

class Desconto4Itens implements Desconto
{
    function __construct(Desconto $proximo = null)
    {
        $this->proximo = $proximo;
    }

    public function desconto(Lista $lista)
    {
        if (count($lista->getLista()) === 3) {
            return 'Desconto de 10%';
        } else if (!is_null($this->proximo)) {
            return $this->proximo->desconto($lista);
        }
        return 'Nenhum desconto aplic3ado';
    }
}