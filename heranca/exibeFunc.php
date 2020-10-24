<?php

require_once "classes/Funcionario.php";
require_once "classes/Gerente.php";
require_once "classes/Programador.php";

$nome = $_POST['nome'];
$salario = $_POST['salario'];
$obs = $_POST['obs'];
$tipo_funcionario = $_POST['tipo_funcionario'];

if ($tipo_funcionario == 1) {
    $funcionario = new Gerente($nome, $salario, $obs);
    $funcionario->relatorioFunc();
} elseif ($tipo_funcionario == 2) {
    $funcionario = new Programador($nome, $salario, $obs);
    $funcionario->relatorioFunc();
} else {
    echo "Tipo de funcionário inexistente. Tente novamente";
}
