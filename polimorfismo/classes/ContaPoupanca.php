<?php

namespace Classes;

class ContaPoupanca extends Conta
{
    public function __construct($saldo)
    {
        parent::__construct($saldo);
        $this->saldo = $saldo;
    }
}
