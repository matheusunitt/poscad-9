<?php

class Programador extends Funcionario
{
    private $linguagem;

    public function __construct($nome = "", $salario = 0, $linguagem = "")
    {
        parent::__construct($nome, $salario);
        $this->linguagem = $linguagem;
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
