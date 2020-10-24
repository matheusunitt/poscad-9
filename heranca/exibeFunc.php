<?php

require_once "classes/Funcionario.php";
require_once "classes/Gerente.php";
require_once "classes/Programador.php";

$nome = $_POST['nome'];
$salario = $_POST['salario'];
$obs = $_POST['obs'];
$tipo_funcionario = $_POST['tipo_funcionario'];

echo "<p>Nome: {$nome}</p>";
echo "<p>Salário: {$salario}</p>";
echo "<p>Observações: {$obs}</p>";
echo "<p>Tipo de funcionário: Gerente</p>";

if ($tipo_funcionario == 1) {
    $funcionario = new Gerente($nome, $salario, $obs);
} elseif ($tipo_funcionario == 1) {
    $funcionario = new Programador($nome, $salario, $obs);
} else {
    echo "Tipo de funcionário inexistente. Tente novamente";
}
