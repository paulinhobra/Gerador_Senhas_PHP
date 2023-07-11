<?php

require_once "Generate.php";

$letras = $_POST['letras'];
$numeros = $_POST['numeros'];
$simbolos = $_POST['simbolos'];
$tamanho = (int) $_POST['size'];

if(isset($letras) && !empty($letras) && isset($numeros) && !empty($numeros) && isset($simbolos) && !empty($simbolos)){

    echo "Todas as opções selecionadas!";

}else if(isset($letras) && !empty($letras) && isset($numeros) && !empty($numeros)){

    echo "Letras e Números";
    
}else if(isset($numeros) && !empty($numeros) && isset($simbolos) && !empty($simbolos)){

    echo "Números e Símbolos";

}else if(isset($letras) && !empty($letras) && isset($simbolos) && !empty($simbolos)){

    echo "Letras e Símbolos";

}else if(isset($letras) && !empty($letras)){

    echo "Somente letras";

}else if(isset($numeros) && !empty($numeros)){

    echo "Somente números";
    
}else if(isset($simbolos) && !empty($simbolos)){

    echo "Somente simbolos";
    
}else {
    header('location: index.php');
}


$var = new Generate();
