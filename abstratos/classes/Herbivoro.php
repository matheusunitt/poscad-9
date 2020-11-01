<?php

namespace Classes;

class Herbivoro extends Animal
{
    public function __construct($come)
    {
        parent::__construct($come);
    }

    public function habitoAlimentar()
    {
        echo "<p>" . $this->getCome() . "</p>";
    }
}
