<?php

require 'animal.php';
require 'Frog.php';
require 'Ape.php';

$sheep = new Animal;
$sheep -> set_name("shaun");

echo $sheep->get_name(). "<br>"; // "shaun"
echo $sheep->legs(). "<br>"; // 2
echo $sheep->cold_blooded();// false

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
$kodok->set_legs(4);

echo "<br>";

$sungokong = new Ape("kera sakti");
$sungokong->yell() // "Auooo"

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
?>