<?php

// Release 1 Ape

require_once("Animal.php");

class Ape extends Animal
{
    public $legs = 2;
    public function yell()
    {
        return "Yell : Auooo<br>";
    }
}

?>
