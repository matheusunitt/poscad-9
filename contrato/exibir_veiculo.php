<?php

require_once "autoload.php";
require_once "interfaces/ICaracteristicas.php";

use Classes\Veiculo;
use Classes\Carro;
use Classes\Moto;

$nome = $_POST['nome'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$tipo_veiculo = $_POST['tipo_veiculo'];

if ($tipo_veiculo == 1) {
    $veiculo = new Carro($nome, $marca, $modelo);
} elseif ($tipo_funcionario == 2) {
    $veiculo = new Moto($nome, $marca, $modelo);
} else {
    echo "Tipo de veículo inexistente. Tente novamente";
}

$veiculo->exibeNome();
$veiculo->exibeMarca();
$veiculo->exibeModelo();
