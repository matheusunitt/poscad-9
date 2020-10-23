<?php

require_once "Produto.php";

$produto = new Produto("001", "Fall Guys PC Edition", 49.99);

$produto->imprimeProduto();

$produto = null;
