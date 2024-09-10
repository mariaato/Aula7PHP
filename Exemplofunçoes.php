<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Funções na mesma página</title>
</head>
<body>
    <h1>Exemplo de Funções na mesma página</h1>

    <form method="POST" action="">
        <label for="numero1">Número 1: </label>
        <input type="text" name="numero1" id="numero1"><br>

        <label for="numero2">Número 2: </label>
        <input type="text" name="numero2" id="numero2"><br>

        <input type="submit" name="enviar" value="Calcular soma">
    </form>

    <?php
    //verifica se o formulário foi enviado
    if(isset($_POST['enviar'])){
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        //Chamando a função somar 
        $resultado = somar($numero1, $numero2);

        echo "<p>A Soma de $numero1 e $numero2 é igual a $resultado</p>";

        $resultado = subtracao($numero1, $numero2);
        echo "<p>A Diferença de $numero1 e $numero2 é igual a $resultado</p>";

        $resultado = multiplicacao($numero1, $numero2);
        echo "<p>A multiplicação de $numero1 e $numero2 é igual a $resultado</p>";
        


    }


    // Função que calcula a soma de dois numeros
    function somar($numero1, $numero2) {
        $soma = $numero1 + $numero2;
        return $soma;
        }


    function subtracao($numero1, $numero2) {
        $subtracao = $numero1 - $numero2;
        return $subtracao;
    }

    function multiplicacao($numero1, $numero2) {
        $multiplicacao = $numero1 * $numero2;
        return $multiplicacao;
    }





    ?>
</body>
</html>