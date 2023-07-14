<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GERADOR DE SENHAS - PHP 8.2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
    <div class="container">
        <h1>GERADOR DE SENHAS - <a href="http://php.net" target="_blank"> PHP 8.2 </a></h1>
        <br/>

        <h3>SELECIONE AS OPÇÕES:</h3>

        <form action="helper.php" method="POST">

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="letras" id="letras" value="Letras" checked>
                <label class="form-check-label" for="letras">Letras</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="numeros" id="numeros" value="Numeros">
                <label class="form-check-label" for="numeros">Números</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="simbolos" id="simbolos" value="Simbolos">
                <label class="form-check-label" for="simbolos">Símbolos</label>
            </div>
            
            <br/>
            <br/>
            <h3>SELECIONE O TAMANHO:</h3>            

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="size" id="oito" value="8">
                <label class="form-check-label" for="oito">8</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="size" id="doze" value="12" checked>
                <label class="form-check-label" for="doze">12</label>
            </div>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="size" id="dezesseis" value="16">
                <label class="form-check-label" for="dezesseis">16</label>
            </div>            
            
            <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" class="btn btn-primary btn-adjust" value="ENVIAR">                
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>