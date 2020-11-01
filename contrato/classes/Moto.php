<?php

namespace Classes;

final class Moto extends Veiculo implements ICaracteristicas
{
    public function __construct($nome, $marca, $modelo)
    {
        parent::__construct($nome, $marca, $modelo);
    }

    public function exibeNome()
    {
        parent::getNome();
    }

    public function exibeMarca()
    {
        parent::getMarca();
    }

    public function exibeModelo()
    {
        parent::getModelo();
    }
}
