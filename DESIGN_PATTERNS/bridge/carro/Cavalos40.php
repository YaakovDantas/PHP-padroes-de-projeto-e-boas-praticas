<?php

class Cavalos40 extends Motor
{
    function darPartida()
    {
        $this->ligar();
        $this->guiar();
        $this->frear();
        $this->guiar();
        $this->guiar();
        $this->frear();
    }
}