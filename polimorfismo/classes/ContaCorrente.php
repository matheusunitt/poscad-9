<?php

namespace Classes;

class ContaCorrente extends Conta
{
    public function __construct($saldo)
    {
        parent::__construct($saldo);
        $this->saldo = $saldo;
    }

    public function saca($valor)
    {
        parent::setSaldo($valor - 0.10);
    }
}
