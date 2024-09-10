<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamando funções em páginas diferentes</title>
   
</head>
<body>
    <h1>Chamando funções em páginas diferentes</h1>

<div class="form">
    <form method="POST" action="resultado.php">
        <label for="numero1">Número 1: </label>
        <input type="text" name="numero1" id="numero1"><br>

        <label for="numero2">Número 2: </label>
        <input type="text" name="numero2" id="numero2"><br>

        <input type="submit" name="enviar" value="Calcular soma">
    </form>
</div>

    <form method="POST" action="resultadoSub.php">
        <label for="numero1">Número 1: </label>
        <input type="text" name="numero1" id="numero1"><br>

        <label for="numero2">Número 2: </label>
        <input type="text" name="numero2" id="numero2"><br>

        <input type="submit" name="enviar" value="Calcular subtração">
    </form>

    <form method="POST" action="resultadoMulti.php">
        <label for="numero1">Número 1: </label>
        <input type="text" name="numero1" id="numero1"><br>

        <label for="numero2">Número 2: </label>
        <input type="text" name="numero2" id="numero2"><br>

        <input type="submit" name="enviar" value="Calcular multiplicação">
    </form>

    </body>
    </html>