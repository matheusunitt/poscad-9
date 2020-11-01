<?php

namespace Classes;

final class Carro extends Veiculo implements ICaracteristicas
{
    public function __construct($nome, $marca, $modelo)
    {
        parent::__construct($nome, $marca, $modelo);
    }

    public function exibeNome()
    {
        echo "<p>" . parent::getNome() . "</p>";
    }

    public function exibeMarca()
    {
        echo "<p>" . parent::getMarca() . "</p>";
    }

    public function exibeModelo()
    {
        echo "<p>" . parent::getModelo() . "</p>";
    }
}
