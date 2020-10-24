<?php

namespace Classes;

class Conta
{
    protected $saldo;

    public function __construct($saldo = 0)
    {
        $this->saldo = $saldo;
    }

    public function deposita($valor)
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

    public function imprime()
    {
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