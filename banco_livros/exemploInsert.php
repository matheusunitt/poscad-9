<?php

$servidor = new PDO("mysql:host=localhost;dbname=livros", "root", "");

$consulta = $servidor->prepare("INSERT INTO famosos (nome) VALUES (:_nome)");
$consulta->bindParam(':_nome', $nome);

$nome = "Alexandre Herculano";
$consulta->execute();

$nome = "Neusa Bittar";
$consulta->execute();

$servidor = null;
