<?php

require_once "Generate.php";

$letras = $_POST['letras'];
$numeros = $_POST['numeros'];
$simbolos = $_POST['simbolos'];
$tamanho = (int) $_POST['size'];

if(!empty($letras) || !empty($numeros) || !empty($simbolos)){
    $var = new Generate($letras, $numeros, $simbolos, $tamanho);
    echo $var->getPassword();
}else {
    header('location: index.php');
}

