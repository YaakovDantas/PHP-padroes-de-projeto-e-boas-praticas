<?php

interface Visitavel
{
    public function aceita(Visitor $visitor);
}