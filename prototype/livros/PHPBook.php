<?php

class PHPBook extends BookPrototype {
    function __construct() {
        $this->topic = 'PHP';
    }
    function __clone() 
    {
        $this->topic = 'P.H.P';
    }
}