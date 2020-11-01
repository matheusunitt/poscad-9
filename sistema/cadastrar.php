<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

require_once "autoload.php";

use Classes\Cadastro;

$cadastro = new Cadastro();
$cadastro->inserir($nome, $telefone, $email);
