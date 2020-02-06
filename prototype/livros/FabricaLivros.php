<?php

class FabricaLivros
{
    function pegarClone(BookPrototype $livro)
    {
        return clone $livro; 
        // depois de fazer o clone o método __clone() de um objeto se existir será chamado.
        // Quando método __clone() for chamado, 
        //    permitindo que qualquer propriedade seja alterada do clone
    }
}