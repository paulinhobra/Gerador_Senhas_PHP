<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GERADOR DE SENHAS - PHP 8.2</title>

    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
    <div class="container">
        <h1>GERADOR DE SENHAS - <a href="http://php.net" target="_blank"> PHP 8.2 </a></h1>
        <br/>

        <h3>SELECIONE AS OPÇÕES:</h3>

        <form action="helper.php" method="POST">
            <input type="checkbox" id="letras" name="letras" value ="Letras" checked> Letras
            <input type="checkbox" id="numeros" name="numeros" value ="Numeros"> Números
            <input type="checkbox" id="simbolos" name="simbolos" value ="Simbolos"> Símbolos
            <br/>
            <input type="radio" name="size" id="oito" value="8" checked>8
            <input type="radio" name="size" id="doze" value="12">12
            <input type="radio" name="size" id="dezesseis" value="16">16
            <input type="submit" value="Enviar">
        </form>
    </div>    
</body>
</html>