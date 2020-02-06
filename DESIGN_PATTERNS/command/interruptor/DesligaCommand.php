<?php

class DesligaCommand implements Command
{
    function __construct(Interruptor $i)
    {
        $this->i = $i;
    }

    function execute()
    {
        $this->i->desligar();
    }
}