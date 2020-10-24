<?php

$servidor = new PDO("mysql:host=localhost;dbname=livros", "root", "");

$tabela = $servidor->query("SELECT id, nome FROM famosos");

$style = "border:1px solid #ccc; padding:20px; box-sizing:border-box;";

if ($tabela) {
    foreach ($tabela as $linha) {
        $id = $linha['id'];

        echo "<div style='{$style}'>";
        echo "ID: {$id} <br>";
        echo "Nome: {$linha['nome']} <br>";
        echo "<a href='exemploDelete.php?id={$id}'>Excluir</a>";
        echo "</div>";
    }
}

$servidor = null;
