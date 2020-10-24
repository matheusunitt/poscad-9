<?php

require_once "autoload.php";

use Classes\Conta;
use Classes\ContaCorrente;
use Classes\ContaPoupanca;

$conta_co = new ContaCorrente(200);
$conta_pou = new ContaPoupanca(500);

$conta_co->saca(100);
$conta_pou->saca(100);

$conta_co->imprime();
$conta_pou->imprime();
