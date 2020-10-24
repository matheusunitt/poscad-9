<?php

require_once "autoload.php";

use Classes\Funcionario;
use Classes\Gerente;
use Classes\Programador;

$nome = $_POST['nome'];
$salario = $_POST['salario'];
$obs = $_POST['obs'];
$tipo_funcionario = $_POST['tipo_funcionario'];

if ($tipo_funcionario == 1) {
    $funcionario = new Gerente($nome, $salario, $obs);
} elseif ($tipo_funcionario == 2) {
    $funcionario = new Programador($nome, $salario, $obs);
} else {
    echo "Tipo de funcionário inexistente. Tente novamente";
}

$funcionario->relatorioFunc();
