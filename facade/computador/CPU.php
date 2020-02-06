<?php

class CPU 
{
    public function freeze() 
    { 
        echo "CPU travou. <br/>";
    }
    public function jump($position) 
    { 
        echo "CPU pulou para memoria $position. <br/>";
    }
    public function execute() 
    { 
        echo "CPU esta executando. <br/>";
    }

}
  