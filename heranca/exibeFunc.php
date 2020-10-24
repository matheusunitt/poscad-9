<?php

$nome = $_POST['nome'];
$salario = $_POST['salario'];
$obs = $_POST['obs'];
$tipo_funcionario = $_POST['tipo_funcionario'];

echo "<p>Nome: {$nome}</p>";
echo "<p>Salário: {$salario}</p>";
echo "<p>Observações: {$obs}</p>";
echo "<p>Tipo de funcionário: {$tipo_funcionario}</p>";
