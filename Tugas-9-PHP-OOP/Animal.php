<?php

// Release 0 Animal

class Animal
{
    public $name = "";
    public $legs = 4;
    public $cold_blooded = false;

    public function __construct($name)
    {
        return $this->name = $name;
    }

    public function getName()
    {
        return "Name : " . $this->name . "<br>";
    }

    public function getLegs()
    {
        return "legs : " . $this->legs . "<br>";
    }

    public function getCold_Blooded()
    {
        return "cold blooded : " . (boolval($this->cold_blooded) ? 'yes<br>' : 'no<br>');
    }
}

?>
