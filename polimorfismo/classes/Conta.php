<?php

namespace Classes;

abstract class Conta
{
    protected $saldo;
    const AGENCIA = "BB-UFPB";

    public function __construct($saldo = 0)
    {
        $this->saldo = $saldo;
    }

    final public function deposita($valor)
    {
        $this->setSaldo($this->getSaldo() + $valor);
    }

    public function saca($valor)
    {
        if ($this->getSaldo() >= $valor) {
            $this->setSaldo($this->getSaldo() - $valor);
        } else {
            echo "Saldo insuficiente";
        }
    }

    public function imprimeExtrato()
    {
        echo "<p>" . self::AGENCIA . "</p>";
        echo "<p>Saldo: R$ {$this->getSaldo()}</p>";
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
        return $this;
    }
}
