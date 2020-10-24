<?php

class Gerente extends Funcionario
{
    private $projeto;

    public function __construct($nome = "", $salario = 0, $projeto = "")
    {
        parent::__construct($nome, $salario);
        $this->projeto = $projeto;
    }

    public function relatorioFunc()
    {
        parent::relatorioFunc();
        echo "<p>Projeto: {$this->getProjeto()}</p>";
    }

    public function getProjeto()
    {
        return $this->projeto;
    }

    public function setProjeto($projeto)
    {
        $this->projeto = $projeto;

        return $this;
    }
}
