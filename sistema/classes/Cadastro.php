<?php

namespace Classes;

use PDO;

class Cadastro
{
    private $nome;
    private $telefone;
    private $email;

    public function inserir($nome, $telefone, $email)
    {
        $this->setNome($nome);
        $this->setTelefone($telefone);
        $this->setEmail($email);

        $servidor = new PDO("mysql:host=localhost;dbname=sistema", "root", "");

        $consulta = $servidor->prepare("INSERT INTO cadastro (nome, telefone, email) VALUES (:_nome, :_telefone, :_email)");
        $consulta->bindParam(':_nome', $nome);
        $consulta->bindParam(':_telefone', $telefone);
        $consulta->bindParam(':_email', $email);

        $consulta->execute();

        $servidor = null;

        header("Location: lista_usuarios.php");
    }

    public function exibir()
    {
        $servidor = new PDO("mysql:host=localhost;dbname=sistema", "root", "");

        $tabela = $servidor->query("SELECT codigo, nome, email, telefone FROM cadastro");

        $style = "border:1px solid #ccc; padding:20px; box-sizing:border-box;";

        if ($tabela) {
            foreach ($tabela as $linha) {
                $codigo = $linha['codigo'];

                $bloco = <<<EOL
                <div style='{$style}'>
                    <p>Código: {$codigo} </p>
                    <p>Nome: {$linha['nome']} </p>
                    <p>Telefone: {$linha['telefone']} </p>
                    <p>Email: {$linha['email']} </p>
                </div>
                EOL;

                echo $bloco;
            }
        }

        $servidor = null;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}
