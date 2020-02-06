<?php

class CloneFactory
{
    function pegarClone(Animal $animal)
    {
        return clone $animal;
    }
}