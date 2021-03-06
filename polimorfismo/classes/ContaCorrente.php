<?php

namespace Classes;

final class ContaCorrente extends Conta
{
    public function __construct($saldo)
    {
        parent::__construct($saldo);
    }

    public function saca($valor)
    {
        if ($this->getSaldo() >= $valor) {
            $this->setSaldo($this->getSaldo() - $valor - 0.10);
        } else {
            echo "Saldo insuficiente";
        }
    }
}
