<?php

require './Animal.php';
require './Cachorro.php';
require './Gato.php';
require './Vaca.php';

$dog = new Cachorro();
$dog->somAnimal();
echo"<br>";
$vaca = new Vaca();
$vaca->somAnimal();
echo"<br>";
$cat = new Gato();
$cat->somAnimal();
