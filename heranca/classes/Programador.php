<?php

namespace Classes;

class Programador extends Funcionario
{
    private $linguagem;

    public function __construct($nome = "", $salario = 0, $linguagem = "")
    {
        parent::__construct($nome, $salario);
        $this->linguagem = $linguagem;
    }

    public function relatorioFunc()
    {
        parent::relatorioFunc();
        echo "<p>Linguagem de Programação: {$this->getLinguagem()}</p>";
    }

    public function getLinguagem()
    {
        return $this->linguagem;
    }

    public function setLinguagem($linguagem)
    {
        $this->linguagem = $linguagem;
        return $this;
    }
}
