<?php

// Release 1 Frog

require_once("Animal.php");

class Frog extends Animal
{
    public $cold_blooded = true;
    public function jump()
    {
        return "Jump : Hop Hop<br>";
    }
}

?>
