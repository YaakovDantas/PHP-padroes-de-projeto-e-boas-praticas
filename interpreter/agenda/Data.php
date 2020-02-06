<?php

class Data implements Expressao
{
    function __construct($data)
    {
        $this->data = $data;
    }

    function avalia()
    {
        return $this->data;
    }
}