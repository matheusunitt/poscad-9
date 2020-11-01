<?php

require_once "autoload.php";

use Classes\Animal;
use Classes\Carnivoro;
use Classes\Herbivoro;

$carn = new Carnivoro("carnes");
$herb = new Herbivoro("legumes");

$carn->habitoAlimentar();
$herb->habitoAlimentar();
