<?php

require_once "Generate.php";

$letras = $_POST['letras'];
$numeros = $_POST['numeros'];
$simbolos = $_POST['simbolos'];
$tamanho = (int) $_POST['size'];

$var = new Generate($letras, $numeros, $simbolos, $tamanho);
echo $var->getPassword();