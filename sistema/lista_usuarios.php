<?php

require_once "autoload.php";

use Classes\Cadastro;

$style = "border:1px solid #ccc; padding:20px; box-sizing:border-box;";

$cadastro = new Cadastro();
$cadastro->exibir();

echo "<div style='{$style}'>";
echo "<a href='index.html'>Adicionar novo usuário</a>";
echo "</div>";
