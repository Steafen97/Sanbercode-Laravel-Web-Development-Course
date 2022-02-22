<?php

require_once 'Animal.php';
require_once 'Ape.php';
require_once 'Frog.php';

echo "<h3>Tugas PHP OOP</h3>";

$sheep = new Animal("shaun");

echo $sheep->getName(); // "shaun"
echo $sheep->getLegs(); // 4
echo $sheep->getCold_Blooded(); // no

echo "<br>";

$kodok = new Frog("buduk");
echo $kodok->getName(); // "buduk"
echo $kodok->getLegs(); // 4
echo $kodok->getCold_Blooded(); // yes
echo $kodok->jump(); // "Hop Hop"

echo "<br>";

$sungokong = new Ape("kera sakti");
echo $sungokong->getName(); // "kera sakti"
echo $sungokong->getLegs(); // 2
echo $sungokong->getCold_Blooded(); // false
echo $sungokong->yell(); // "Auooo"

?>