<?php

class Pessoa
{
    protected $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function escreverNome()
    {
        echo "<p>{$this->nome}</p>";
    }

    public function __destruct()
    {
        echo "<p>Destruct chamado.</p>";
    }
}
