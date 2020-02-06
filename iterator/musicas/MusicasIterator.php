<?php

interface MusicasIterator{

    function current();
    function next();
    function valid();
    public function back();
}