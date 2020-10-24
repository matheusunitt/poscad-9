<?php

require_once "Funcionario.php";
require_once "Programador.php";
require_once "Gerente.php";

$programador = new Programador("Maria", 2500, "Ruby on Rails");
$funcionario = new Funcionario("João", 1800);
$gerente = new Programador("Jeffrey", 4500, "Projeto SaaS");

$programador->relatorioFunc();
$funcionario->relatorioFunc();
$gerente->relatorioFunc();
