<?php

class LigaCommand implements Command
{
    function __construct(Interruptor $i)
    {
        $this->i = $i;
    }

    function execute()
    {
        $this->i->ligar();
    }
}