<?php

require_once 'animal.php';
require_once 'ape.php';
require_once 'frog.php';

$sheep = new Animal();
$sheep->set_name("shaun");// "shaun"
echo "Nama : ".$sheep->get_name();
echo "<br> Jumlah Kaki : ".$sheep->legs; // 2
echo "<br> Berdarah dingin : ".$sheep->cold_blooded; // false

$sungokong = new Ape();
$sungokong->set_name("kera sakti");
echo "<br> Nama : ".$sungokong->get_name();
echo "<br> Jumlah Kaki : ".$sungokong->legs; 
echo "<br> Berdarah dingin : ".$sungokong->cold_blooded;
echo "<br> Yell : ".$sungokong->yell(); // "Auooo"

$kodok = new Frog();
$kodok->set_name("buduk");
echo "<br> Nama : ".$kodok->get_name();
$kodok->set_legs(4);
$kodok->set_cold_blooded("true");
echo "<br> Jumlah Kaki : ".$kodok->get_legs();
echo "<br> Berdarah dingin : ".$kodok->get_cold_blooded();
echo "<br> Jump : ".$kodok->jump(); // "hop hop"

?>