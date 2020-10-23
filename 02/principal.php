<?php

require_once "Pessoa.php";
require_once "Fisica.php";
require_once "Juridica.php";

$pessoa_juridica = new Juridica("Jeffrey", 115);

$pessoa_juridica->validarCNPJ();
